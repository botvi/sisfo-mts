<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategoris = Kategori::all();
        return view('pageadmin.kategori.index', compact('kategoris'));
    }

    public function create(){
        return view('pageadmin.kategori.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255|unique:kategoris,nama',
        ]);

        // Membuat kategori baru
        $kategori = new Kategori();
        $kategori->nama = $request->input('nama');
        $kategori->save();

        // Redirect dengan pesan sukses
        return redirect()->route('kategoris.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('pageadmin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255|unique:kategoris,nama,'.$id,
        ]);

        // Update kategori
        $kategori = Kategori::findOrFail($id);
        $kategori->nama = $request->input('nama');
        $kategori->save();

        // Redirect dengan pesan sukses
        return redirect()->route('kategoris.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategoris.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
