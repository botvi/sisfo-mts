@extends('template-web.layout')

@section('content')
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-5">Video Kegiatan</h1>
        </div>
        <div class="row">
                <div class="col-md-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card">
                        <div class="card-img-top">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/xf1PYyKWccI?si=uw_qSColkxfJ-ASR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, delectus?</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
