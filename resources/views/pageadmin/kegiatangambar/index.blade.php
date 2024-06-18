@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> foto kegiatan</h4>

        <div class="mb-3">
            <a href="{{ route('gambars.create') }}" class="btn btn-primary">Tambah Kegiatan</a>
        </div>

        <div class="card">
            <h5 class="card-header">Foto Kegiatan</h5>
            <div class="table-responsive text-nowrap p-4">
                <table id="example" class="display compact nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                    
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($gambars as $gambar)
                            <tr>
                                <td class="fw-bold">{{ $gambar->title }}</td>
                                <td>{{ $gambar->description }}</td>
                                <td><a href="{{ $gambar->image }}" target="_blank">{{ $gambar->image}}</a></td>
                                <td>
                                    <a href="{{ route('gambars.edit', $gambar->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('gambars.destroy', $gambar->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">Hapus</button>
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
