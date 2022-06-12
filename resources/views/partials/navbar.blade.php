    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jl. Ahmad Yani 118 Surabaya
                        60231</small>
                    {{-- <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small> --}}
                    <small class="text-light"><i
                            class="fa fa-envelope-open me-2"></i>humas.dinkesjatim@gmail.com</small>
                </div>
            </div>
            <div class="header-waktu">
                <p>
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    echo date('d M Y | ');
                    ?>
                    <span id="clock"></span>
                </p>
            </div>

            <div class="col-lg-4 text-center text-lg-end">

                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    {{-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a> --}}
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    {{-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a> --}}
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <img class="header-logo" src="img/header.png" alt="" srcset="">
                {{-- <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1> --}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/beranda" class="nav-item nav-link active">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu m-0">
                            <a href="/visimisi" class="dropdown-item">Visi Misi</a>
                            <a href="/motto" class="dropdown-item">Motto</a>
                            <a href="/tujuan" class="dropdown-item">Tujuan</a>
                            <a href="/kebijakan" class="dropdown-item">Kebijakan</a>
                            <a href="/struktur-organisasi" class="dropdown-item">Struktur Organisasi</a>
                            <a href="/profil-pejabat" class="dropdown-item">Profil Pejabat</a>
                            <a href="/penghargaan" class="dropdown-item">Penghargaan</a>
                            <a href="/maklumat" class="dropdown-item">Maklumat Pelayanan</a>

                        </div>
                    </div>
                    <a href="pelayanan" class="nav-item nav-link">Pelayanan</a>
                    <a href="#" class="nav-item nav-link">PPID</a>
                    <a href="#" class="nav-item nav-link">Sitemap</a>
                    <a href="#" class="nav-item nav-link">FAQ</a>
                    <a href="#" class="nav-item nav-link">Kontak</a>
                    {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Our features</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                    </div>
                </div> --}}
                    {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                {{-- <div class="btn btn-primary py-2 px-4 ms-3"> --}}
                <div class="dropdown" style="    margin-left: 30px;">
                    <button type="button" class="btn btn-light2 dropdown-toggle" data-bs-toggle="dropdown">
                        Bahasa Indonesia
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                </div>
                {{-- </div> --}}

                {{-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
                <li><a class="dropdown-item" href="#">English</a></li>
            </ul></a> --}}
            </div>
        </nav>

