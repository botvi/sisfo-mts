@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> Edit video</h4>

        <div class="card mb-4">
            <h5 class="card-header">Edit video</h5>
            <div class="card-body">
                <form action="{{ route('video_kegiatans.update', $video->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $video->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required>{{ $video->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="video_path" class="form-label">Video</label>
                        <input type="file" class="form-control" id="video_path" name="video_path">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
