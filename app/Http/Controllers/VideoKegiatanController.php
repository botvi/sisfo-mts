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
        'youtube_link' => 'required|string',
    ]);

    // Convert short YouTube link to full embed link
    $youtube_link = $this->convertToEmbedLink($request->input('youtube_link'));

    // Create new video
    $video = new VideoKegiatan();
    $video->title = $request->input('title');
    $video->youtube_link = $youtube_link;
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
            'youtube_link' => 'required|string',
        ]);
    
        // Convert short YouTube link to full embed link
        $youtube_link = $this->convertToEmbedLink($request->input('youtube_link'));
    
        // Update video
        $video = VideoKegiatan::findOrFail($id);
        $video->title = $request->input('title');
        $video->youtube_link = $youtube_link;
        $video->save();
    
        // Redirect back with success message
        Alert::success('Success', 'Kegiatan berhasil diperbarui.');
    
        return redirect()->route('videos.index');
    }
    
    // Helper function to convert YouTube short link to embed link
    private function convertToEmbedLink($shortLink)
    {
        // Check if the link is a short YouTube link
        if (strpos($shortLink, 'youtu.be') !== false) {
            // Extract video ID from short link
            $videoId = substr($shortLink, strrpos($shortLink, '/') + 1);
            return "https://www.youtube.com/embed/$videoId";
        }
    
        // If link is already in full embed format, return it as is
        return $shortLink;
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
