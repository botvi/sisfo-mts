<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Al Ma'arif</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="{{ asset('env') }}/logomts.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('web') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('web') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('web') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('web') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('web') }}/css/style.css" rel="stylesheet">
    @yield('style')

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


   


    <!-- Navbar Start -->
    @include('template-web.navbar')
    <!-- Navbar End -->


   
@yield('content')


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-white mb-4">Alamat Kami</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jalan Ra. Kartini Jalur V Desa Air Emas Kec.Singingi</p>
                    <p class="mb-2"><i class="bi bi-whatsapp me-3"></i>082260013007</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>imtsalmaarifsingingi@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://api.whatsapp.com/send/?phone=6282260013007&text&type=phone_number&app_absent=0"><i
                                class="bi bi-whatsapp"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/mtsalmaarif.ariemas?mibextid=ZbWKwL"><i
                                class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

            @include('sweetalert::alert')

            <!-- Core JS -->
        @yield('script')
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('web') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('web') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('web') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('web') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('web') }}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('web') }}/js/main.js"></script>
    
</body>

</html>