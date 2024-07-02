@extends('template-web.layout')

@section('style')
<style>
    .content-text {
        text-align: justify; /* Merapikan teks agar rata kiri-kanan */
        line-height: 1.6; /* Menambah spasi antar baris untuk keterbacaan */
    }
</style>
@endsection

@section('content')
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s">
            <h3 class="display-5 mb-5">{{ $berita->title }}</h3>
        </div>
        <div class="row">
            <div class="col-12 mb-4 text-center">
                <img class="img-fluid rounded" src="{{ asset('/' . $berita->image) }}" alt="{{ $berita->title }}" width="1000px">
            </div>
            <div class="col-12 content-text wow fadeInUp" data-wow-delay="0.1s">
                <p><strong>{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('l, d F Y') }}</strong>, {{ $berita->content }}</p>
                <!-- Tampilkan informasi kategori dan penulis -->
                <p><strong>Kategori:</strong> {{ $berita->kategori->nama }}</p>
                <p><strong>Penulis:</strong> {{ $berita->user->nama }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
