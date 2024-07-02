@extends('template-web.layout')

@section('style')
<style>
    /* Grid and card styling */
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Grid columns with minimum width of 250px */
        gap: 20px; /* Gap between grid items */
        padding: 20px; /* Padding around grid */
    }

    .card {
        position: relative; /* Relative positioning for overlay */
        overflow: hidden; /* Prevent image overflow */
        border-radius: 10px; /* Rounded corners for card */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for card */
        transition: transform 0.3s ease; /* Smooth scale transition */
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Cover image sizing */
        transition: transform 0.3s ease; /* Smooth image scale transition */
    }

    .card:hover {
        transform: scale(1.05); /* Scale up on hover */
    }

    .card .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
        color: white;
        opacity: 0; /* Hidden by default */
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.3s ease; /* Smooth opacity transition */
    }

    .card:hover .card-overlay {
        opacity: 1; /* Show overlay on hover */
    }

    .card .card-overlay h5 {
        font-size: 1.5rem; /* Overlay title font size */
    }

    /* Animation classes */
    .wow {
        visibility: hidden;
    }

    .wow.fadeInUp {
        animation: fadeInUp 0.5s forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection

@section('content')
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 mb-5">Foto Kegiatan</h1>
        </div>
        <div class="grid-container">
            @foreach($gambars as $gambar)
            <div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="card">
                    <img src="{{ asset('/' . $gambar->image) }}" class="card-img-top" alt="{{ $gambar->title }}">
                    <div class="card-overlay  text-center">
                        <p class="text-white fw-5">{{ $gambar->title }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
