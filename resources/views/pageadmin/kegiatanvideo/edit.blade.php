
@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> edit kegiatan</h4>

        <div class="card mb-4">
            <h5 class="card-header">Edit Kegiatan</h5>
            <div class="card-body">
                <form action="{{ route('videos.update', $video->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $video->title }}" required>
                    </div>
                  
                    <div class="mb-3">
                        <label for="youtube_link" class="form-label">YouTube URL</label>
                        <input type="text" class="form-control" id="youtube_link" name="youtube_link"
                            value="{{ $video->youtube_link }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
