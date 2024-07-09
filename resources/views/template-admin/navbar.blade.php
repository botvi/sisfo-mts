<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('env') }}/logomts.png" width="30px" srcset="">

            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">MTS-Al Ma'arif</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
            <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('pendaftaransiswa') ? 'active' : '' }}">
            <a href="/pendaftaransiswa" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Pendaftaran</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('kategori') ? 'active' : '' }}">
            <a href="/kategori" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-minus"></i>
                <div data-i18n="Analytics">Kategori</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('berita') ? 'active' : '' }}">
            <a href="/berita" class="menu-link">
                <i class="menu-icon tf-icons bx bx-news"></i>
                <div data-i18n="Analytics">Berita</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('videokegiatan') ? 'active' : '' }}">
            <a href="/videokegiatan" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-videos"></i>
                <div data-i18n="Analytics">Video Kegiatan</div>
            </a>
        </li>
        <li class="menu-item {{ Request::is('fotokegiatan') ? 'active' : '' }}">
            <a href="/fotokegiatan" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-image"></i>
                <div data-i18n="Analytics">Foto Kegiatan</div>
            </a>
        </li>
    </ul>
    
</aside>