<!-- Topbar Start -->
<div class="container-fluid bg-primary text-white d-none d-lg-flex">
    <div class="container py-3">
        <div class="d-flex align-items-center">
            <a href="{{ route('home') }}">
                <h2 class="text-white fw-bold m-0">MTS Al-Ma'arif</h2>
            </a>
            <div class="ms-auto d-flex flex-column align-items-start">
                <div class="d-flex align-items-center mb-2">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Jalan Ra. Kartini Jalur V Desa Air Emas Kec.Singingi</small>
                </div>
                <div class="d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>mtsalmaarifsingingi@gmail.com</small>
                    <small class="ms-4"><i class="bi bi-whatsapp me-3"></i>082260013007</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.facebook.com/mtsalmaarif.ariemas?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary rounded-circle ms-2" href="https://www.instagram.com/mtsalmaarif.singingi?igsh=aTFtaDluaGozNnA1"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">MTS Al-Ma'arif</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('galeryfoto') || request()->routeIs('galeryvideo') ? 'active' : '' }}" data-bs-toggle="dropdown">Kegiatan</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('galeryfoto') }}" class="dropdown-item {{ request()->routeIs('galeryfoto') ? 'active' : '' }}">Foto Kegiatan</a>
                            <a href="{{ route('galeryvideo') }}" class="dropdown-item {{ request()->routeIs('galeryvideo') ? 'active' : '' }}">Video Kegiatan</a>
                        </div>
                    </div>
                    <a href="{{ route('profilsekolah') }}" class="nav-item nav-link {{ request()->routeIs('profilsekolah') ? 'active' : '' }}">Profil Sekolah</a>
                </div>
                <div class="ms-auto">
                    @auth
                        <a href="{{ route('profile') }}" class="btn btn-success rounded-pill py-2 px-3">PROFIL</a>
                        <a href="{{ route('logout') }}" class="btn btn-danger rounded-pill py-2 px-3">LOGOUT</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success rounded-pill py-2 px-3">LOGIN</a>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</div>
