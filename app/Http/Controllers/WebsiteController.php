<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('pageweb.index');
    }
    public function fotokegiatan()
    {
        return view('pageweb.fotokegiatan');
    }
    public function videokegiatan()
    {
        return view('pageweb.videokegiatan');
    }
}
