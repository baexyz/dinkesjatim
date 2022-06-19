@extends('layouts.beranda')


@section('container')
    <!-- Blog Start -->
    <div class="container-fluid py-55 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-55">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Berita Terkini</h5>
                {{-- <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1> --}}
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid2" src="img/berita200.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Kategori</a>
                        </div>

                        <div class="p-4">
                            {{-- <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div> --}}
                            <h4 class="mb-3">Judul</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>

            </div>
            <br><br>
            <center><a href="" class="fw-bold text-primary text-uppercase">Lebih Banyak Berita</a></center>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Service Start -->
    <div class="container py-55">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Data & Informasi</h5>
            {{-- <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1> --}}
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Publikasi Data & Informasi</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Peraturan & Aturan</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Pengadaan Barang & Jasa</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-lines text-white"></i>
                    </div>
                    <h4 class="mb-3">Perencanaan & Evaluasi</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>

                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3">Situasi Terkini COVID-19</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3">Call Center COVID-19</h4>
                    <p class="m-0">Daftar Informasi Dinas Kesehatan Provinsi Jawa Timur Untuk Publik</p>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Service End -->

    <!-- Blog Start -->
    <div class="container-fluid py-55 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-55">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Artikel Kesehatan</h5>
                {{-- <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1> --}}
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">


                    <div class="blog-item bg-light rounded overflow-hidden">


                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/berita200.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Nama</a>
                        </div>

                        <div class="p-4">
                            {{-- <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div> --}}
                            <h4 class="mb-3">Judul</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>

                    </div>
                </div>

            </div>
            <br><br>
            <center><a href="" class="fw-bold text-primary text-uppercase">Lebih Banyak Berita</a></center>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Service Start -->
    <div class="container py-55">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Bidang Dinas Kesehatan</h5>
            {{-- <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1> --}}
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Sekretariat</h4>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-chart-pie text-white"></i>
                    </div>
                    <h4 class="mb-3">Bidang Kesehatan Masyarakat</h4>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-code text-white"></i>
                    </div>
                    <h4 class="mb-3">Bidang Pencegahan dan Pengendalian Penyakit</h4>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fab fa-android text-white"></i>
                    </div>
                    <h4 class="mb-3">Bidang Pelayanan Kesehatan</h4>
                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3">Bidang Sumber Daya Kesehatan</h4>

                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-search text-white"></i>
                    </div>
                    <h4 class="mb-3">PPID</h4>

                    <a class="btn btn-lg btn-primary rounded" href="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!-- Service End -->

    <!-- Quote Start -->
    <div class="container-fluid py-55 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-55">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Public Corner</h5>
                        {{-- <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1> --}}
                    </div>

                    {{-- {{  dd($publiccorner)}} --}}
                    <div style="cursor: pointer;">
                        @foreach ($publiccorner as $item)
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title"><b>{{ $item->nama }} </b>| Updated {{ \Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}</div>
                                    {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                                    <p class="card-text">Pertanyaan : {{ $item->pertanyaan}}</p>
                                    <p class="card-text">Jawaban : {{ $item->jawaban}}</p>
                                    <a href="/public-corner/{{$item->id}}/view" class="card-link">Baca Selengkapnya..</a>
                                    {{-- <a href="#" class="card-link">Another link</a> --}}
                                </div>
                            </div>
                            {{-- <span class="judulp1">{{ $item->pertanyaan }}</span> --}}
                            {{-- <span>{{ Str::limit($item->jawaban, 13) }} ...</span> --}}
                            {{-- <span>{{ $item->nama }}</span> --}}
                            {{-- <span class="tanggalp1">{{ $item->updated_at }}</span> --}}
                            {{-- <a style="color:#000000" href="" class="bacas1">Baca Selengkapnya</a> --}}

                        </div>
                    @endforeach

                    <br>
                    <a href="/public-corner"><input class="btn btn-primary" type="submit" value="Kirim Pertanyaan"></a>
                    <a href="/public-corner/semua"><input class="btn btn-primary" type="reset" value="Lihat Selengkapnya"></a>
                </div>
                <div class="col-lg-5">
                    <div class="section-title text-left position-relative pb-3 mb-5 mx-auto" ;>
                        <h5 class="fw-bold text-primary text-uppercase">Cacak Jatim</h5>
                    </div>
                    <img class="imgcc" src="img/CACAK.jpeg" alt="" />
                    {{-- <span class="deskripsicc1">Call Center Cangkrukan Kesehatan Jawa Timur</span> --}}

                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Team Start -->

    <div class="container py-55">
        <iframe class="video" src="https://www.youtube.com/embed/yLvsSSliFec">
        </iframe>

    </div>

    <!-- Team End -->
@endsection
