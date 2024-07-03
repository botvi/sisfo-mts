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
                        <tr><td class="text-uppercase"><strong>Pramuka</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Paskibra</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>PMR (Palang Merah Remaja)</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>OSIS</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>KIR (Karya Ilmiah Remaja)</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Tari Tradisional</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Marching Band</strong></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 mb-3">
                <h3 class="mb-3 text-uppercase">Prestasi Sekolah</h3>
                <table class="table table-striped">
                    <tbody>
                        <tr><td class="text-uppercase"><strong>Juara 1 Lomba Cerdas Cermat Tingkat Kabupaten 2023</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Juara 2 Lomba Pidato Bahasa Inggris Tingkat Provinsi 2022</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Juara 1 Lomba Tari Tradisional Tingkat Nasional 2021</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Juara Umum Olimpiade Sains Tingkat Kabupaten 2020</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Juara 3 Lomba Debat Bahasa Indonesia Tingkat Provinsi 2019</strong></td></tr>
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
                        <tr><td class="text-uppercase"><strong>Program Hafalan Al-Qur'an</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Program Bilingual</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Program IT dan Robotika</strong></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 mb-3">
                <h3 class="mb-3 text-uppercase">Program Pembelajaran</h3>
                <table class="table table-striped">
                    <tbody>
                        <tr><td class="text-uppercase"><strong>Kurikulum Nasional</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Kurikulum Agama</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Kegiatan Belajar di Luar Kelas</strong></td></tr>
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
                        <tr><td class="text-uppercase"><strong>Perpisahan dan Wisuda</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Study Tour</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Pentas Seni</strong></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 mb-3">
                <h3 class="mb-3 text-uppercase">Fasilitas</h3>
                <table class="table table-striped">
                    <tbody>
                        <tr><td class="text-uppercase"><strong>Laboratorium Komputer</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Laboratorium IPA</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Perpustakaan</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Ruang Kesenian</strong></td></tr>
                        <tr><td class="text-uppercase"><strong>Ruang Olahraga</strong></td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-uppercase">Contact Person</h3>
                <div class="p-3 mb-5 bg-body rounded shadow-sm">
                    <p class="text-uppercase"><strong><i class="fa fa-map-marker-alt me-3"></i>Jalan Ra. Kartini Jalur V Desa Air Emas Kec. Singingi</strong></p>
                    <p class="text-uppercase"><strong><i class="fa fa-envelope me-3"></i>mtsalmaarifsingingi@gmail.com</strong></p>
                    <p class="text-uppercase"><strong><i class="bi bi-whatsapp me-3"></i>082260013007</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
