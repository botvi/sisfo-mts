
@extends('template-web.layout')

@section('content')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-primary mb-4 animated slideInDown">MTS Al-Ma'arif</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <!-- Breadcrumb content can go here -->
        </nav>
        <div class="mt-4">
            <a href="link-to-brochure.pdf" class="btn btn-primary btn-lg mx-2 rounded-pill animated slideInDown" data-wow-delay="0.2s">Brosur</a>
            <a href="link-to-registration-page" class="btn btn-success btn-lg rounded-pill mx-2 animated slideInDown" data-wow-delay="0.3s">Pendaftaran</a>
        </div>
    </div>
</div>

<!-- Page Header End -->
<div class="container-xxl pt-5">
        <div class="container">
            <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-5">Berita Terbaru</h1>
            </div>
            <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('web') }}/img/project-1.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('web') }}/img/project-1.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                           
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Data Analytics & Insights</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('web') }}/img/project-2.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('web') }}/img/project-2.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                          
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Marketing Content Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('web') }}/img/project-3.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('web') }}/img/project-3.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                         
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Business Target Market</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
                <div class="project-item mb-5">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('web') }}/img/project-4.jpg" alt="">
                        <div class="project-overlay">
                            <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('web') }}/img/project-4.jpg"
                                data-lightbox="project"><i class="fa fa-eye"></i></a>
                          
                        </div>
                    </div>
                    <div class="p-4">
                        <a class="d-block h5" href="">Social Marketing Strategy</a>
                        <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection