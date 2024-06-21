@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> video kegiatan</h4>

        <div class="mb-3">
            <a href="{{ route('videos.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        <div class="card">
            <h5 class="card-header">Kategori</h5>
            <div class="table-responsive text-nowrap p-4">
                <table id="example" class="display compact nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th>YouTube URL</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($videos as $key => $video)
                            <tr>
                                <td class="fw-bold">{{ $video->title }}</td>
                                <td class="fw-bold">{{ $video->description }}</td>
                                <td class="fw-bold"><a href="{{ $video->youtube_link }}">{{ $video->youtube_link }}</a></td>
                                <td>
                                    <a href="{{ route('videos.edit', $video->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('videos.destroy', $video->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus Kegiatan ini?')">Hapus</button>
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
