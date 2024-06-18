<!-- resources/views/page/kategori/edit.blade.php -->

@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms /</span> edit kategori</h4>

        <div class="card mb-4">
            <h5 class="card-header">Edit Kategori</h5>
            <div class="card-body">
                <form action="{{ route('kategoris.update', $kategori->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ $kategori->nama }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
