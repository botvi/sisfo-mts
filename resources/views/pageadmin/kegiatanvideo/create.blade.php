<!-- resources/views/pageadmin/kegiatanvideo/create.blade.php -->
@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> tambah kegiatan</h4>

        <div class="card mb-4">
            <h5 class="card-header">Tambah Kegiatan</h5>
            <div class="card-body">
                
                <form action="{{ route('videos.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="mb-3">
                        <label for="youtube_link" class="form-label">YouTube URL</label>
                        <input type="text" class="form-control" id="youtube_link" name="youtube_link" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
