<?php

namespace App\Http\Controllers;

use App\Models\GambarKegiatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
    
        Alert::success('Success', 'Kegiatan berhasil ditambahkan.');
    
        return redirect()->route('gambars.index');
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Find the gambar kegiatan
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
    
        // Update the gambar kegiatan
        $gambar->update($data);
    
        Alert::success('Success', 'Kegiatan berhasil diperbarui.');
    
        return redirect()->route('gambars.index');
    }

    public function destroy($id)
    {
        $gambar = GambarKegiatan::findOrFail($id);
    
        // Delete the image file if exists
        if ($gambar->image && file_exists(public_path($gambar->image))) {
            unlink(public_path($gambar->image));
        }
    
        $gambar->delete();

        Alert::success('Success', 'Kegiatan berhasil dihapus.');
    
        return redirect()->route('gambars.index');
    }
}
