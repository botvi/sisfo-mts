<?php
namespace App\Http\Controllers;

use App\Models\GambarKegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GambarKegiatanController extends Controller
{
    public function index()
    {
        $gambars = GambarKegiatan::get();
        return view('pageadmin.kegiatangambar.index', compact('gambars'));
    }

    public function create()
    {
        return view('pageadmin.kegiatangambar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $data = $request->all();
     
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('gambarkegiatan'), $imageName);
            $data['image'] = 'gambarkegiatan/'.$imageName;
        }
    
        GambarKegiatan::create($data);
    
        return redirect()->route('gambars.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

   

    public function edit($id)
    {
        $gambar = GambarKegiatan::findOrFail($id);
        return view('pageadmin.kegiatangambar.edit', compact('gambar'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Find the berita
        $gambar = GambarKegiatan::findOrFail($id);
    
        // Collect the data
        $data = $request->all();
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($gambar->image && file_exists(public_path($gambar->image))) {
                unlink(public_path($gambar->image));
            }
    
            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('gambarkegiatan'), $imageName);
            $data['image'] = 'gambarkegiatan/' . $imageName;
        }
    
        // Update the berita
        $gambar->update($data);
    
        // Redirect with success message
        return redirect()->route('gambars.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gambar = GambarKegiatan::findOrFail($id);
        $gambar->delete();

        return redirect()->route('gambars.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
