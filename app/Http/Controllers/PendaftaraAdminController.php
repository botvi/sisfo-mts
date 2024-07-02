<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\StatusUpdated;
use Illuminate\Support\Facades\Mail;

class PendaftaraAdminController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::with('user')->get();
        return view('pageadmin.pendaftaran.index', compact('pendaftaran'));
    }

    public function show($id)
    {
        $pendaftaran = Pendaftaran::with('user')->findOrFail($id);
        return view('pageadmin.pendaftaran.show', compact('pendaftaran'));
    }


    
    public function updateStatus(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->status = $request->status;
        $pendaftaran->save();
    
        // Kirim email
        Mail::to($pendaftaran->user->email)->send(new StatusUpdated($pendaftaran));
    
        Alert::success('Success', 'Status pendaftaran berhasil diperbarui.');
        return redirect()->route('pendaftaransiswa.show', $id);
    }
    

    

    
}

