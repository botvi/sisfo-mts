@extends('template-web.layout')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <!-- Header Section -->
        <div class="text-center pb-5">
            <h1 class="display-5 mb-3 text-uppercase">Profil Sekolah</h1>
            <p class="lead">Informasi tentang MTS Al-Ma'arif</p>
        </div>

        <!-- School Name and Principal Section -->
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 mb-3 text-center">
                <h3 class="mb-3 text-uppercase">Nama Sekolah</h3>
                <p class="text-uppercase"><strong>MTS Al-Ma'arif</strong></p>
                <div class="mt-3">
                    <img src="{{ asset('env') }}/logomts.png" alt="Logo Sekolah" class="img-fluid" style="width: 200px; height: auto;">
                </div>
            </div>
            <div class="col-lg-6 mb-3 text-center">
                <h3 class="mb-3 text-uppercase">Nama Kepala Sekolah</h3>
                <p class="text-uppercase"><strong>Bapak Ahmad Hidayat</strong></p>
                <div class="mt-3">
                    <img src="{{ asset('env') }}/kepalasekolah.jpg" alt="Foto Kepala Sekolah" class="img-thumbnail shadow" style="width: 200px; height: auto;">
                </div>
            </div>
        </div>

        <!-- Extracurricular and Achievements Table -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-3">
                <h3 class="mb-3 text-uppercase">Ekstrakurikuler</h3>
                <table class="table table-striped">
                    <tbody>
                        <tr><td class="text-uppercase"><strong>Tilawatil Qur'an</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>KAligrafi</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Hadroh</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Panahan sunnah</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Volley</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Sepakbola/futsal</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Takraw</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Badminton</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Tennis meja</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Catur</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Pramuka</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Drumband</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Pencak silat</strong></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 mb-3">
                <h3 class="mb-3 text-uppercase">Prestasi Sekolah</h3>
                <table class="table table-striped">
                    <tbody>
                        <h5 class="mb-3 text-uppercase">Tahun 2023</h5>
                        <tr><td class="text-uppercase"><strong>juara mayoret terbaik sekabupaten</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>juara 3 festival hadroh se-provinsi</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>juara 1 festival hadroh se-kabupaten</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>ksm ipa peringkat 5 se-kapupaten kuantan singingi tahun 2023</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>peserta ksm ipa se-provinsi riau</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>juara 3 volley ball putra pada harlah yayasan as-salam antar mts se-kabupaten kuantan singingi</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>juara umum 1 pada ajang porsema 2x berturut-turut tahun 2022-2023</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>juara 3 putra lomba panahan kejurprov tahun 2023 se-provinsi riau</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>juara 3 putri lomba anahan kejurprov tahun 2023</strong></td></tr>
                        <tr><td class="text-uppercase"><strong></strong></td></tr>
                        <tr><td class="text-uppercase"><strong></strong><h6 class="mb-3 text-uppercase">HADROH</h6></td></tr>
                        <tr><td class="text-uppercase">- juara 3 putra festival hadroh tingkat provinsi riau<strong></strong></td></tr>
                        <tr><td class="text-uppercase"><strong>- juara terbaik putri festival hadroh tingkat provinsi riau</strong></td></tr>
                        



                        
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Flagship Programs and Learning Programs Table -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-3">
                <h3 class="mb-3 text-uppercase">Program Unggulan</h3>
                <table class="table table-striped">
                    <tbody>
                        <tr><td class="text-uppercase"><strong>Tahfidz Qur'an</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Bahasa inggris</strong></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 mb-3">
                <h3 class="mb-3 text-uppercase">Program Pembelajaran</h3>
                <table class="table table-striped">
                    <tbody>
                        <tr><td class="text-uppercase"><strong>pengkajian kitab kuning</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>al qur'an</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>nadzoman</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>muhadhoroh</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>tahfidz</strong></td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- End of Year Programs and Facilities Table -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-3">
                <h3 class="mb-3 text-uppercase">Program Akhir Sanah</h3>
                <table class="table table-striped">
                    <tbody>
                        <tr><td class="text-uppercase"><strong>study tour</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>ziarah makam orang soleh</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>khotmul qur'an</strong></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 mb-3">
                <h3 class="mb-3 text-uppercase">Fasilitas</h3>
                <table class="table table-striped">
                    <tbody>
                        <tr><td class="text-uppercase"><strong>gedung asrama permanen</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>gedung madrasah</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>mushola/masjid</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>lapangan olahraga</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>koperasi</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>kantin</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>gedung balai latihan kerja (BLK)</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>laundry</strong></td></tr>
                        
                   
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-uppercase">Contact Person</h3>
                <div class="p-3 mb-5 bg-body rounded shadow-sm">
                    <p class="text-uppercase"><strong><i class="bi bi-whatsapp me-3"></i>082260013007</strong></p>
                    <p class="text-uppercase"><strong><i class="fa fa-map-marker-alt me-3"></i>Jalan Ra. Kartini Jalur V Desa Air Emas Kec. Singingi</strong></p>
                    <p class="text-uppercase"><strong><i class="fa fa-envelope me-3"></i>mtsalmaarifsingingi@gmail.com</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
