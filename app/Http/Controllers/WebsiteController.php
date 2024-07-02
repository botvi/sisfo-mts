<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\GambarKegiatan;
use App\Models\VideoKegiatan;

class WebsiteController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('kategori', 'user')->get();
        return view('pageweb.index', compact('beritas'));
    }

    public function showBerita($title)
    {
        $berita = Berita::with('kategori', 'user')->where('title', $title)->firstOrFail();
        return view('pageweb.detailberita', compact('berita'));
    }
    
    public function fotokegiatan()
    {
        $gambars = GambarKegiatan::all();
        return view('pageweb.fotokegiatan', compact('gambars'));
    }

    public function videokegiatan()
    {
        $videos = VideoKegiatan::all();
        return view('pageweb.videokegiatan', compact('videos'));
    }
}
