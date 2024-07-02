@extends('template-admin.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Detail /</span> <strong>Pendaftaran</strong></h4>

    <div class="card">
        <h5 class="card-header"><strong>Detail Pendaftaran</strong></h5>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th><strong>Foto</strong></th>
                    <td><strong> <img src="{{ $pendaftaran->user->foto ? asset($pendaftaran->user->foto) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png' }}" width="150px" height="auto" alt="User Photo" class="user-photo mb-3 rounded"></strong></td>
                </tr>
                <tr>
                    <th><strong>Nama calon siswa</strong></th>
                    <td><strong>{{ $pendaftaran->user->nama }}</strong></td>
                </tr>
                <tr>
                    <th><strong>Alamat</strong></th>
                    <td><strong>{{ $pendaftaran->user->alamat }}</strong></td>
                </tr>
                <tr>
                    <th><strong>Asal sekolah</strong></th>
                    <td><strong>{{ $pendaftaran->user->asal_sekolah }}</strong></td>
                </tr>
                <tr>
                    <th><strong>Status</strong></th>
                    <td>
                        <span class="badge 
                            {{ $pendaftaran->status == 'Diterima' ? 'bg-success' : ($pendaftaran->status == 'Ditolak' ? 'bg-danger' : 'bg-warning') }}">
                            {{ $pendaftaran->status }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><strong>Tanggal daftar</strong></th>
                    <td><strong>{{ \Carbon\Carbon::parse($pendaftaran->created_at)->translatedFormat('l, d F Y') }}</strong></td>
                </tr>
                <tr>
                    <th><strong>Dokumen Pendaftaran</strong></th>
                    <td>
                        <strong><a href="{{ asset($pendaftaran->img_pendaftaran) }}" target="_blank">{{ asset($pendaftaran->img_pendaftaran) }}</a></strong>
                    </td>
                </tr>
                <tr>
                    <th><strong>Dokumen Pernyataan/Perjanjian Santri</strong></th>
                    <td>
                        <strong><a href="{{ asset($pendaftaran->img_pernyataanperjanjiansantri) }}" target="_blank">{{ asset($pendaftaran->img_pernyataanperjanjiansantri) }}</a></strong>
                    </td>
                </tr>
                <tr>
                    <th><strong>Dokumen Pernyataan/Perjanjian Orang Tua</strong></th>
                    <td>
                        <strong><a href="{{ asset($pendaftaran->img_pernyataanperjanjianorangtua) }}" target="_blank">{{ asset($pendaftaran->img_pernyataanperjanjianorangtua) }}</a></strong>
                    </td>
                </tr>
            </table>

            <form id="updateStatusForm" action="{{ route('pendaftaransiswa.updateStatus', $pendaftaran->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="status" class="form-label"><strong>Ubah Status</strong></label>
                    <select name="status" id="status" class="form-control">
                        <option value="sedang di verifikasi" {{ $pendaftaran->status == 'sedang di verifikasi' ? 'selected' : '' }}><strong>Sedang di verifikasi</strong></option>
                        <option value="Diterima" {{ $pendaftaran->status == 'Diterima' ? 'selected' : '' }}><strong>Diterima</strong></option>
                        <option value="Ditolak" {{ $pendaftaran->status == 'Ditolak' ? 'selected' : '' }}><strong>Ditolak</strong></option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary" onclick="confirmUpdateStatus()"><strong>Update Status</strong></button>
            </form>
        </div>
    </div>
</div>

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmUpdateStatus() {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda akan mengubah status pendaftaran!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '<strong>Ya, ubah!</strong>',
            cancelButtonText: '<strong>Batal</strong>'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('updateStatusForm').submit();
            }
        })
    }
</script>
@endsection
@endsection
