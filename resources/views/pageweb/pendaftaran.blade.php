@extends('template-web.layout')

@section('content')
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 mb-5">Pendaftaran santri baru</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ isset($pendaftaran) ? route('pendaftaran.update', ['pendaftaran' => $pendaftaran->id]) : route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(isset($pendaftaran))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="img_pendaftaran" class="form-label">Gambar Pendaftaran</label>
                        <input type="file" class="form-control" id="img_pendaftaran" name="img_pendaftaran">
                        @if(isset($pendaftaran) && $pendaftaran->img_pendaftaran)
                            <button type="button" class="btn btn-danger mt-2" onclick="removeImage('img_pendaftaran')">Hapus</button>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="img_pernyataanperjanjiansantri" class="form-label">Gambar Pernyataan Perjanjian Santri</label>
                        <input type="file" class="form-control" id="img_pernyataanperjanjiansantri" name="img_pernyataanperjanjiansantri">
                        @if(isset($pendaftaran) && $pendaftaran->img_pernyataanperjanjiansantri)
                            <button type="button" class="btn btn-danger mt-2" onclick="removeImage('img_pernyataanperjanjiansantri')">Hapus</button>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="img_pernyataanperjanjianorangtua" class="form-label">Gambar Pernyataan Perjanjian Orang Tua</label>
                        <input type="file" class="form-control" id="img_pernyataanperjanjianorangtua" name="img_pernyataanperjanjianorangtua">
                        @if(isset($pendaftaran) && $pendaftaran->img_pernyataanperjanjianorangtua)
                            <button type="button" class="btn btn-danger mt-2" onclick="removeImage('img_pernyataanperjanjianorangtua')">Hapus</button>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">{{ isset($pendaftaran) ? 'Simpan Perubahan' : 'Simpan' }}</button>
                </form>
            </div>

            <div class="col-md-6">
                <h3>Dokumen yang sudah diunggah</h3>
                @if(isset($pendaftaran))
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">Nama Santri</th>
                                <td>{{ $pendaftaran->user->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Status Pendaftaran</th>
                                <td>
                                    @if($pendaftaran->status == 'Diterima')
                                        <span class="badge bg-success">{{ $pendaftaran->status }}</span>
                                        <div class="alert alert-success mt-2" role="alert">
                                            Dokumen anda sudah di verifikasi, antarkan persyaratan ke sekolah.
                                        </div>
                                    @else
                                        <span class="badge bg-warning">{{ $pendaftaran->status }}</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Gambar Pendaftaran</th>
                                <td>
                                    <a href="{{ asset($pendaftaran->img_pendaftaran) }}" data-lightbox="gallery">
                                        <img src="{{ asset($pendaftaran->img_pendaftaran) }}" alt="Gambar Pendaftaran" class="img-thumbnail" style="width: 150px; height: auto;">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Gambar Pernyataan Perjanjian Santri</th>
                                <td>
                                    <a href="{{ asset($pendaftaran->img_pernyataanperjanjiansantri) }}" data-lightbox="gallery">
                                        <img src="{{ asset($pendaftaran->img_pernyataanperjanjiansantri) }}" alt="Gambar Pernyataan Perjanjian Santri" class="img-thumbnail" style="width: 150px; height: auto;">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Gambar Pernyataan Perjanjian Orang Tua</th>
                                <td>
                                    <a href="{{ asset($pendaftaran->img_pernyataanperjanjianorangtua) }}" data-lightbox="gallery">
                                        <img src="{{ asset($pendaftaran->img_pernyataanperjanjianorangtua) }}" alt="Gambar Pernyataan Perjanjian Orang Tua" class="img-thumbnail" style="width: 150px; height: auto;">
                                    </a>
                                </td>
                            </tr>
                         
                        </tbody>
                    </table>
                @else
                    <p>Tidak ada dokumen yang diunggah.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    function removeImage(id) {
        document.getElementById(id).value = '';
    }
</script>
@endsection
