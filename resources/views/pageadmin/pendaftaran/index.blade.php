@extends('template-admin.layout')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Pendaftaran</h4>
        <div class="card">
            <h5 class="card-header">Pendaftaran</h5>
            <div class="table-responsive text-nowrap p-4">
                <table id="example" class="display compact nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama calon siswa</th>
                            <th>Alamat</th>
                            <th>Asal sekolah</th>
                            <th>Status</th>
                            <th>Tanggal daftar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($pendaftaran as $key => $daftar)
                        <tr>
                            <td> <img src="{{ $daftar->user->foto ? asset($pendaftaran->user->foto) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png' }}" width="50px" height="auto" alt="User Photo" class="user-photo mb-3 rounded"></td>
                            <td>{{ $daftar->user->nama }}</td>
                            <td>{{ $daftar->user->alamat }}</td>
                            <td>{{ $daftar->user->asal_sekolah }}</td>
                            <td>
                                <span class="badge 
                                    {{ $daftar->status == 'Diterima' ? 'bg-success' : ($daftar->status == 'Ditolak' ? 'bg-danger' : 'bg-warning') }}">
                                    {{ $daftar->status }}
                                </span>
                            </td>
                            <td><strong>{{ \Carbon\Carbon::parse($daftar->created_at)->translatedFormat('l, d F Y') }}</strong></td>
                            <td>
                                <a href="{{ route('pendaftaransiswa.show', $daftar->id) }}" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
