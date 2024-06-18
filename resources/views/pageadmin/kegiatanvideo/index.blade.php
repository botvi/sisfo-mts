@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Video Kegiatan /</span> Index</h4>

        <div class="card mb-4">
            <h5 class="card-header">Daftar Video Kegiatan</h5>
            <div class="card-body">
                <a href="{{ route('video_kegiatans.create') }}" class="btn btn-primary mb-3">Upload Video</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Video</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                            <tr>
                                <td>{{ $video->title }}</td>
                                <td>{{ $video->description }}</td>
                                <td>
                                    @if ($video->video_path)
                                        <video width="200" controls>
                                            <source src="{{ asset($video->video_path) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        No video available
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('video_kegiatans.edit', $video->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('video_kegiatans.destroy', $video->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
