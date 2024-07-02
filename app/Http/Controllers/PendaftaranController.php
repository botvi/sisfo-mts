<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::where('user_id', Auth::id())->first();
        return view('pageweb.pendaftaran', compact('pendaftaran'));
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'img_pendaftaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_pernyataanperjanjiansantri' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_pernyataanperjanjianorangtua' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload file dan simpan path
        $imgPendaftaranPath = $request->file('img_pendaftaran')->move('dokumen', time() . '_pendaftaran.' . $request->file('img_pendaftaran')->getClientOriginalExtension());
        $imgSantriPath = $request->file('img_pernyataanperjanjiansantri')->move('dokumen', time() . '_santri.' . $request->file('img_pernyataanperjanjiansantri')->getClientOriginalExtension());
        $imgOrangtuaPath = $request->file('img_pernyataanperjanjianorangtua')->move('dokumen', time() . '_orangtua.' . $request->file('img_pernyataanperjanjianorangtua')->getClientOriginalExtension());

        // Simpan data ke database
        $pendaftaran = new Pendaftaran();
        $pendaftaran->user_id = Auth::id(); // Ambil user_id dari user yang sedang login
        $pendaftaran->img_pendaftaran = $imgPendaftaranPath;
        $pendaftaran->img_pernyataanperjanjiansantri = $imgSantriPath;
        $pendaftaran->img_pernyataanperjanjianorangtua = $imgOrangtuaPath;
        $pendaftaran->status = 'sedang di verifikasi'; // Nilai default untuk status
        $pendaftaran->save();

        // Tampilkan SweetAlert notification
        Alert::success('Berhasil', 'Pendaftaran berhasil disimpan!');

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'img_pendaftaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_pernyataanperjanjiansantri' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'img_pernyataanperjanjianorangtua' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Cari pendaftaran berdasarkan ID
        $pendaftaran = Pendaftaran::findOrFail($id);

        // Update gambar jika ada yang diunggah
        if ($request->hasFile('img_pendaftaran')) {
            File::delete($pendaftaran->img_pendaftaran); // Hapus file lama
            $imgPendaftaranPath = $request->file('img_pendaftaran')->move('dokumen', time() . '_pendaftaran.' . $request->file('img_pendaftaran')->getClientOriginalExtension());
            $pendaftaran->img_pendaftaran = $imgPendaftaranPath;
        }

        if ($request->hasFile('img_pernyataanperjanjiansantri')) {
            File::delete($pendaftaran->img_pernyataanperjanjiansantri); // Hapus file lama
            $imgSantriPath = $request->file('img_pernyataanperjanjiansantri')->move('dokumen', time() . '_santri.' . $request->file('img_pernyataanperjanjiansantri')->getClientOriginalExtension());
            $pendaftaran->img_pernyataanperjanjiansantri = $imgSantriPath;
        }

        if ($request->hasFile('img_pernyataanperjanjianorangtua')) {
            File::delete($pendaftaran->img_pernyataanperjanjianorangtua); // Hapus file lama
            $imgOrangtuaPath = $request->file('img_pernyataanperjanjianorangtua')->move('dokumen', time() . '_orangtua.' . $request->file('img_pernyataanperjanjianorangtua')->getClientOriginalExtension());
            $pendaftaran->img_pernyataanperjanjianorangtua = $imgOrangtuaPath;
        }

        // Simpan perubahan
        $pendaftaran->save();

        Alert::success('Berhasil', 'Dokumen berhasil diperbarui.');

        return redirect()->back();
    }


}
