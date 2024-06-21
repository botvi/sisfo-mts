<?php

namespace App\Http\Controllers;

use App\Models\VideoKegiatan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VideoKegiatanController extends Controller
{
    public function index()
    {
        $videos = VideoKegiatan::all();
        return view('pageadmin.kegiatanvideo.index', compact('videos'));
    }

    public function create()
    {
        return view('pageadmin.kegiatanvideo.create');
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'youtube_link' => 'required|string',
        ]);

        // Create new video
        $video = new VideoKegiatan();
        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->youtube_link = $request->input('youtube_link');
        $video->save();

        // Redirect back with success message
        Alert::success('Success', 'Kegiatan berhasil ditambahkan.');

        return redirect()->route('videos.index');
    }

    public function edit($id)
    {
        $video = VideoKegiatan::findOrFail($id);
        return view('pageadmin.kegiatanvideo.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        // Validate input
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'youtube_link' => 'required|string',
        ]);

        // Update video
        $video = VideoKegiatan::findOrFail($id);
        $video->title = $request->input('title');
        $video->description = $request->input('description');
        $video->youtube_link = $request->input('youtube_link');
        $video->save();

        // Redirect back with success message
        Alert::success('Success', 'Kegiatan berhasil diperbarui.');

        return redirect()->route('videos.index');
    }

    public function destroy($id)
    {
        $video = VideoKegiatan::findOrFail($id);
        $video->delete();

        // Redirect back with success message
        Alert::success('Success', 'Kegiatan berhasil dihapus.');

        return redirect()->route('videos.index');
    }
}
