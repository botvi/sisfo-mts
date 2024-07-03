@extends('template-web.layout')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center pb-5">
            <h1 class="display-5 mb-3 text-uppercase">Profil Sekolah</h1>
            <p class="lead">Informasi tentang MTS Al-Ma'arif</p>
        </div>

        <!-- Nama Sekolah, Kepala Sekolah dan Foto Kepala Sekolah -->
        <div class="row mb-5">
            <div class="col-lg-6 mb-3 text-center">
                <h3 class="mb-3 text-uppercase">Nama Sekolah</h3>
                <p class="text-uppercase">MTS Al-Ma'arif</p>
                <div class="text-center mt-3">
                    <img src="{{ asset('env') }}/logomts.png" alt="Foto Kepala Sekolah" class="" style="width: 200px; height: auto;">
                </div>
            </div>
            <div class="col-lg-6 mb-3 text-center">
                <h3 class="mb-3 text-uppercase">Nama Kepala Sekolah</h3>
                <p class="text-uppercase">Bapak Ahmad Hidayat</p>
                <div class="text-center mt-3">
                    <img src="{{ asset('env') }}/kepalasekolah.jpg" alt="Foto Kepala Sekolah" class="img-thumbnail shadow" style="width: 200px; height: auto;">
                </div>
            </div>
        </div>

        <!-- Ekstrakurikuler -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-uppercase">Ekstrakurikuler</h3>
                <ul class="list-group shadow">
                    <li class="list-group-item text-uppercase">Pramuka</li>
                    <li class="list-group-item text-uppercase">Paskibra</li>
                    <li class="list-group-item text-uppercase">PMR (Palang Merah Remaja)</li>
                    <li class="list-group-item text-uppercase">OSIS</li>
                    <li class="list-group-item text-uppercase">KIR (Karya Ilmiah Remaja)</li>
                    <li class="list-group-item text-uppercase">Tari Tradisional</li>
                    <li class="list-group-item text-uppercase">Marching Band</li>
                </ul>
            </div>
        </div>

        <!-- Prestasi Sekolah -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-uppercase">Prestasi Sekolah</h3>
                <ul class="list-group shadow">
                    <li class="list-group-item text-uppercase">Juara 1 Lomba Cerdas Cermat Tingkat Kabupaten 2023</li>
                    <li class="list-group-item text-uppercase">Juara 2 Lomba Pidato Bahasa Inggris Tingkat Provinsi 2022</li>
                    <li class="list-group-item text-uppercase">Juara 1 Lomba Tari Tradisional Tingkat Nasional 2021</li>
                    <li class="list-group-item text-uppercase">Juara Umum Olimpiade Sains Tingkat Kabupaten 2020</li>
                    <li class="list-group-item text-uppercase">Juara 3 Lomba Debat Bahasa Indonesia Tingkat Provinsi 2019</li>
                </ul>
            </div>
        </div>

        <!-- Program Unggulan -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-uppercase">Program Unggulan</h3>
                <ul class="list-group shadow">
                    <li class="list-group-item text-uppercase">Program Hafalan Al-Qur'an</li>
                    <li class="list-group-item text-uppercase">Program Bilingual</li>
                    <li class="list-group-item text-uppercase">Program IT dan Robotika</li>
                </ul>
            </div>
        </div>

        <!-- Program Pembelajaran -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-uppercase">Program Pembelajaran</h3>
                <ul class="list-group shadow">
                    <li class="list-group-item text-uppercase">Kurikulum Nasional</li>
                    <li class="list-group-item text-uppercase">Kurikulum Agama</li>
                    <li class="list-group-item text-uppercase">Kegiatan Belajar di Luar Kelas</li>
                </ul>
            </div>
        </div>

        <!-- Program Akhir Sanah -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-uppercase">Program Akhir Sanah</h3>
                <ul class="list-group shadow">
                    <li class="list-group-item text-uppercase">Perpisahan dan Wisuda</li>
                    <li class="list-group-item text-uppercase">Study Tour</li>
                    <li class="list-group-item text-uppercase">Pentas Seni</li>
                </ul>
            </div>
        </div>

        <!-- Fasilitas -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-uppercase">Fasilitas</h3>
                <ul class="list-group shadow">
                    <li class="list-group-item text-uppercase">Laboratorium Komputer</li>
                    <li class="list-group-item text-uppercase">Laboratorium IPA</li>
                    <li class="list-group-item text-uppercase">Perpustakaan</li>
                    <li class="list-group-item text-uppercase">Ruang Kesenian</li>
                    <li class="list-group-item text-uppercase">Ruang Olahraga</li>
                </ul>
            </div>
        </div>

        <!-- Contact Person -->
        <div class="row mb-5">
            <div class="col-12">
                <h3 class="mb-3 text-uppercase">Contact Person</h3>
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <p class="text-uppercase"><i class="fa fa-map-marker-alt me-3"></i>Jalan Ra. Kartini Jalur V Desa Air Emas Kec. Singingi</p>
                    <p class="text-uppercase"><i class="fa fa-envelope me-3"></i>mtsalmaarifsingingi@gmail.com</p>
                    <p class="text-uppercase"><i class="bi bi-whatsapp me-3"></i>082260013007</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
