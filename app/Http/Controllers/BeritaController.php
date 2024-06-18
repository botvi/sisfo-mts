<?php
namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('kategori','user')->get();
        return view('pageadmin.berita.index', compact('beritas'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('pageadmin.berita.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);
    
        $data = $request->all();
        $data['author_id'] = Auth::id(); // Adding the author_id
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('thumbnail'), $imageName);
            $data['image'] = 'thumbnail/'.$imageName;
        }
    
        Berita::create($data);
    
        return redirect()->route('beritas.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function show($id)
    {
        $berita = Berita::with('kategori')->findOrFail($id);
        return view('pageadmin.berita.show', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $kategoris = Kategori::all();
        return view('pageadmin.berita.edit', compact('berita', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);
    
        // Find the berita
        $berita = Berita::findOrFail($id);
    
        // Collect the data
        $data = $request->all();
        $data['author_id'] = Auth::id(); // Adding the author_id
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($berita->image && file_exists(public_path($berita->image))) {
                unlink(public_path($berita->image));
            }
    
            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('thumbnail'), $imageName);
            $data['image'] = 'thumbnail/' . $imageName;
        }
    
        // Update the berita
        $berita->update($data);
    
        // Redirect with success message
        return redirect()->route('beritas.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil dihapus.');
    }
}
