@extends('template-web.layout')
@section('style')
<style>
.fixed-image-size {
    width: 100%;
    height: 300px; /* Sesuaikan tinggi gambar sesuai kebutuhan */
    object-fit: cover; /* Menjaga aspek rasio dan memastikan gambar memenuhi container */
}
</style>
@endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-primary mb-4 animated slideInDown">MTS Al-Ma'arif</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <!-- Breadcrumb content can go here -->
        </nav>
        <div class="mt-4">
            <a href="{{ asset('web') }}/pdf/brosur.pdf" class="btn btn-primary btn-lg mx-2 rounded-pill animated slideInDown" data-wow-delay="0.2s">Brosur</a>
            <a href="link-to-registration-page" class="btn btn-success btn-lg rounded-pill mx-2 animated slideInDown" data-wow-delay="0.3s">Pendaftaran</a>
        </div>
    </div>
</div>
<!-- Page Header End -->
<!-- VISI MISI KEPALA SEKOLAH -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="display-5 mb-4">VISI</h3>
                <ul>
                    <li>Basis perwujudan Indonesia Pinter</li>
                    <li>Khaira Ummah (Ummat terbaik)</li>
                    <li>Islamic Leadership (kepemimpinan Islam)</li>
                    <li>Darul Ulum (Kawasan Ilmu)</li>
                    <li>Ummatun Tafaqohu Fii Ad-diin (Ummat yang kokoh Agamanya)</li>
                </ul>
                <h3 class="display-5 mb-4">MISI</h3>
                <ul>
                    <li>Menanamkan Akidah Ahlus Sunnah Kepada Santri</li>
                    <li>Menanamkan Islamic Education Kepada Santri</li>
                    <li>Membangun karakter dan jati diri santri</li>
                    <li>Membekali santri ilmu pengetahuan, Spritual Emotion dan life skill</li>
                    <li>Membentuk Islamic leadership santri</li>
                    <li>Menggapai khairu ummah</li>
                </ul>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4 text-center">KEPALA MADRASAH</h2>
                <div class="text-center">
                    <img src="{{ asset('web') }}/img/kepalasekolah.jpg" alt="Kepala Madrasah" class="img-fluid rounded mb-4" style="max-width: 300px;">
                    <h4>Muhammad Yahya,S.Pd</h4>
                    {{-- <p>Deskripsi singkat atau kutipan dari Kepala Madrasah, jika ada.</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- VISI MISI KEPALA SEKOLAH -->

<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Berita Terbaru</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach ($beritas as $berita)
            <div class="project-item mb-5">
                <div class="position-relative">
                    <img class="img-fluid fixed-image-size" src="{{ asset('/' . $berita->image) }}" alt="">
                    <div class="project-overlay">
                        
                    </div>
                </div>
                <div class="p-4">
                    <a class="d-block h5" href="{{ route('berita.show', $berita->title) }}">{{ $berita->title }}</a>
                    <span>{{ $berita->description }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
