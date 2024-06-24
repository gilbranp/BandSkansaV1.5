<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
{{-- Bootstrap Icon --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Band Skansa <?= date("Y")  ?> </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="#">{{ $pengaturan->namaheader }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            {{-- <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Profil Band</a></li>
          <li><a class="nav-link scrollto" href="#services">Jadwal Latihan</a></li>
          <li><a class="nav-link scrollto " href="#work">Galeri</a></li>
          <li><a class="nav-link scrollto " href="#blog">Blog</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        
         

        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav> --}}
            @include('frontend.layouts.navbar')

            <!-- .navbar -->
            {{-- <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
        </li>
      </ul> --}}
            {{-- <div class="">
      <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
    </div> --}}
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->

                    <h1 class="hero-title mb-4">{{ $pengaturan->namadepan }}</h1>

                    {{-- <p class="hero-subtitle"><span class="typed" data-typed-items="Pop, Koplo, Pop Punk, Reggae"></span></p> --}}
                    <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $pengaturan->deskdepan }}"></span>
                    </p>
                    <a href="/pendaftaran"><button type="button" class="btn btn-light mt-5">Daftar Sekarang
                            Juga</button></a>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="text-center">Profil Band</h1>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="images/imgpengaturan/imgpembina/{{ $pengaturan->imgpembina }}"
                                            class="img-fluid rounded-circle mt-4" style="width: 250px"
                                            alt="Foto Pembina">
                                    </div>
                                    <div class="col-md-8 mt-4">
                                        <h2>Pembina</h2>
                                        <p>Nama: {{ $pengaturan->namapembina }}</p>
                                        <p>Jabatan: Ketua Band</p>
                                        <p>Sejarah Band:</p>
                                        <p> dalam smkn 1 bawang terdapat banyak extrakurikuler, salah satunya
                                            extrakurikuler band
                                            extrakurikuler band sudah ada sejak dahulu, namun untuk rock ballery art ini
                                            dibuat pada tahun 2017 oleh bpk. willy ferdiansyah selaku pembina pada saat
                                            itu
                                            saat ini rock ballery art memasuki tahun ke 7
                                            band smkn 1 bawang pernah mengikuti parade dan festival musik
                                            pada saat ini pembina band smkn 1 bawang adalah bpk. fauzan akhmad mahanani
                                            dan bpk. andrian kristanto</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h2>Visi & Misi</h2>
                                        <p>Visi:</p>
                                        <p>
                                            menciptakan generasi muda yang cerdas, kreatif, berjiwa seni, berkarya dan
                                            berpestasi</p>
                                        <p>Misi:</p>
                                        <p> 1. meningkatkan pikiran yang kreatif dalam berkarya<br>
                                            2. menjadi ajang menyalurkan bakat<br>
                                            3. lebih memahami musik dan alat musik <br>
                                            4. melaksanakan program pendidikan akademik dibidang musik <br>
                                            5. menjunjung tinggi profesionalisme dalam bermusik dan berorganisasi</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="modal-footer">
                                        <a href="/profil-anggotaa" class="btn btn-primary">Lihat Anggota Lengkap</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Jadwal Latihan
                            </h3>
                            <p class="subtitle-a">
                                Jadwal latihan rutinan Ekstrakurikuler Band Skansanesia
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-mic"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Tempat Latihan</h2>
                                <p class="s-description text-center">
                                    Biasanya kami latihan bersama di studio RBA
                                    (Rock Balery Art) atau tepatnya di studio SMKN1 Bawang
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Latihan Rutin</h2>
                                <p class="s-description text-center">
                                    Biasanya kami melakukan latihan rutin (Extra) pada hari kamis
                                    tepatnya setelah selesai KBM hingga maxsimal latihan yaitu sampai dengan jam 17.00
                                    <a href="/kalender-latihan">
                                        <h6>Kalender Jadwal</h6>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title">Teknis extra</h2>
                                <p class="s-description text-center">
                                    untuk teknis lengkapnya bisa
                                    <a href="#">Lihat disini</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{--
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-binoculars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-brightness-high"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Marketing Services</h2>
                <p class="s-description text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                  provident vitae! Magni
                  tempora perferendis eum non provident.
                </p>
              </div>
            </div>
          {{-- </div> --}}


                </div>
            </div>




            {{-- @include('frontend.layouts.kalender') --}}
            {{-- kalender --}}


        </section><!-- End Services Section -->

        <!-- ======= Counter Section ======= -->
        <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-check"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="3720" data-purecounter-duration="1"
                                    class="counter purecounter"></p>
                                <span class="counter-text">SUKSES DIBAWAKAN</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1"
                                    class="counter purecounter"></p>
                                <span class="counter-text">TAHUN PENGALAMAN</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-people"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="28" data-purecounter-duration="1"
                                    class="counter purecounter"></p>
                                <span class="counter-text">TOTAL ANGGOTA</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-award"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1"
                                    class="counter purecounter"></p>
                                <span class="counter-text">PRESTASI</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Counter Section -->

        <!-- ======= Portfolio Section ======= -->

        <section id="work" class="portfolio-mf sect-pt4 route">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Galeri
                            </h3>
                            <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($pengelolaans as $pengelolaan)
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="images/imggaleri/{{ $pengelolaan->img }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="images/imggaleri/{{ $pengelolaan->img }}" alt="" class="img-fluid"
                                        style="width: 400px; height: 400px;">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">{{ $pengelolaan->judul }}</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">{{ $pengelolaan->namaacara }}</span> / <span
                                                class="w-date">{{ $pengelolaan->tanggal }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="{{ route('galeridetail.show', $pengelolaan->id) }}"> <span
                                                    class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Loreda Cuno Nere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="/portfolio-details"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Mavrito Lana Dere</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="/portfolio-details"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Bindo Laro Cado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="/portfolio-details"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Lena Mado</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="/portfolio-details"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="assets/img/work-1.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Studio Big Bang</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="/portfolio-details"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}

                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="author-test">

                                            <div class="d-flex justify-content-center align-items-center">
                                                <img src="assets/img/eja1.jpg" alt=""
                                                    class="img-fluid rounded-circle b-shadow-a"
                                                    style="max-width: 150px; max-height: 150px;">
                                            </div>


                                            <span class="author">ZAO</span>
                                        </div>
                                        <div class="content-test">
                                            <p class="description lead">
                                                "imajinasi menciptakan kenyataan"
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="author-test">
                                            <img src="assets/img/testimonial-2.jpg" alt=""
                                                class="rounded-circle b-shadow-a">
                                            <span class="author">Denn</span>
                                        </div>
                                        <div class="content-test">
                                            <p class="description lead">
                                                "Hidup ini pilihan,ketika kamu tidak memilih maka itu pilihanmu"
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="author-test">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <img src="assets/img/virgin.jpg" alt=""
                                                    class="img-fluid rounded-circle b-shadow-a"
                                                    style="max-width: 150px; max-height: 150px;">
                                            </div>
                                            <span class="author">VIRGINIA</span>
                                        </div>
                                        <div class="content-test">
                                            <p class="description lead">
                                                "when words fail, music speak"
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <!-- <div id="testimonial-mf" class="owl-carousel owl-theme">
          
        </div> -->
                    </div>
                </div>
            </div>
        </div><!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Blog
                            </h3>
                            <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($blogpengelolaans as $blogpengelola)


                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="/blog-single"><img style="width: 350px; height: 350px;"
                                        src="images/imgblog/{{ $blogpengelola->img }}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">{{ $blogpengelola->tema }}</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="/blog-single">{{ $blogpengelola->judul }}</a></h3>
                                <p class="card-description">
                                    {{ $blogpengelola->deskripsi }}
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                        <span class="author">{{ $blogpengelola->penulis }}</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="bi bi-clock">{{ $blogpengelola->tanggal }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="/blog-single"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Glorius</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="/blog-single">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">DENN</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a href="/blog-single"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <h6 class="category">Web Design</h6>
                  </div>
                </div>
                <h3 class="card-title"><a href="/blog-single">See more ideas about Travel</a></h3>
                <p class="card-description">
                  Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                  a pellentesque nec,
                  egestas non nisi.
                </p>
              </div>
              <div class="card-footer">
                <div class="post-author">
                  <a href="#">
                    <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                    <span class="author">DENN</span>
                  </a>
                </div>
                <div class="post-date">
                  <span class="bi bi-clock"></span> 10 min
                </div>
              </div>
            </div>
          </div> --}}
                </div>
            </div>
        </section><!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
            style="background-image: url(assets/img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Kirim Pesan Kepada Kami
                                            </h5>
                                        </div>
                                        <div>
                                            <form action="{{ route('admin-kontakpendafataran.store') }}" method="post"
                                                class="php-email-form">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" name="nama" class="form-control"
                                                                id="name" placeholder="Nama Kamu" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Email Kamu" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subjek"
                                                                id="subject" placeholder="Subject" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" minlength="20" name="pesan"
                                                                rows="5" placeholder="Pesan" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center my-3">
                                                        <div class="loading">Loading</div>
                                                        <div class="error-message"></div>
                                                        <div class="sent-message">Pesan anda berhasil
                                                            dikirim,terimakasih...</div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit"
                                                            class="button button-a button-big button-rouded">Kirim
                                                            Pesan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Hubungi Kami
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <p class="lead">
                                                {{ $pengaturan->deskkontak }}
                                            </p>
                                            <ul class="list-ico">
                                                <li><span class="bi bi-geo-alt"></span> {{ $pengaturan->alamat }}</li>
                                                <li><span class="bi bi-phone"></span> {{ $pengaturan->nohp }} </li>
                                                <li><span class="bi bi-envelope"></span> {{ $pengaturan->email }}</li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-facebook"></i></span></a></li>
                                                <li><a href="https://www.instagram.com/band.smkn1bawang/?hl=id"><span
                                                            class="ico-circle"><i
                                                                class="bi bi-instagram"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-twitter"></i></span></a></li>
                                                <li><a
                                                        href="https://api.whatsapp.com/send/?phone=%2B6281268477296&text&"><span
                                                            class="ico-circle"><i class="bi bi-whatsapp"></i></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <div class="container mb-5">
        <h1 class="text-center my-5 ">SEPUTAR PERTANYAAN</h1>

        <div id="accordion">
            <!-- Question 1 -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        Pertanyaan 1: Kapan jadwal latihan band?
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <i class="bi bi-arrow-down-short"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Jawaban: Latihan band kami dilakukan setiap hari Kamis sore pukul 15.00 - 17.00 di ruang
                        musik sekolah.
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        Pertanyaan 2: Bagaimana cara bergabung dengan band?
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <i class="bi bi-arrow-down-short"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Jawaban: Untuk bergabung dengan band, silakan hubungi koordinator ekstrakurikuler musik di ruang
                        musik sekolah pada hari Kamis/hubungi lewat contact person.
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        Pertanyaan 3: Apa persyaratan untuk bergabung dengan band?
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            <i class="bi bi-arrow-down-short"></i>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Jawaban: Persyaratan utama adalah memiliki minat dalam musik,basic skill, serta kemauan untuk belajar dan
                        berkolaborasi dengan anggota band lainnya.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @include('frontend.partials.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
