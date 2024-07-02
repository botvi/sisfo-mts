@extends('template-web.layout')

@section('content')
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 mb-5">Video Kegiatan</h1>
        </div>
        <div class="row">
            @foreach($videos as $video)
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card">
                        <div class="card-img-top">
                            <iframe width="100%" height="200" src="{{ $video->youtube_link }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $video->title }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
