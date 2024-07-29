
{{-- @dd($pengelolaan) --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Band Skansa <?=date('Y')?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  {{-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('assets/css/galeri.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Band Skansa</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/#home">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">Profil Band</a></li>
          <li><a class="nav-link scrollto" href="/#services">Jadwal Latihan</a></li>
          <li><a class="nav-link scrollto " href="/#work">Galeri</a></li>
          <li><a class="nav-link scrollto " href="/#blog">Blog</a></li>
          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4">Galeri Detail</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">Galeri Detail</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details py-5">
      <div class="container">
    
        <div class="row">
          <div class="col-lg-8 col-md-12 mb-4">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
    
                <div class="swiper-slide">
                  <img class="img-fluid img-detail" src="{{ asset('images/imggaleri/' . $pengelolaan->img) }}" alt="Konten Foto">
                </div>
    
                {{-- <div class="swiper-slide">
                  <img src="assets/img/portfolio-details-2.jpg" alt="">
                </div>
    
                <div class="swiper-slide">
                  <img src="assets/img/portfolio-details-3.jpg" alt="">
                </div> --}}
    
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
    
          <div class="col-lg-4 col-md-12">
            <div class="portfolio-info mb-4">
              <h3>Informasi</h3>
              <ul>
                <li><strong>Acara</strong>: {{ $pengelolaan->namaacara }}</li>
                <li><strong>Tempat</strong>: {{ $pengelolaan->tempat }}</li>
                <li><strong>Tanggal</strong>: {{ $pengelolaan->tanggal }}</li>
                <li><strong>Link Vidio</strong>: <a target="_blank" href="{{ $pengelolaan->url }}">{{ $pengelolaan->url }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Detail</h2>
              <p class="text-break">
                {{ $pengelolaan->detail }}
              </p>
            </div>
          </div>
        </div>
    
      </div>
    </section>
    <!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.partials.footer')
  <!-- End  Footer -->

  {{-- <div id="preloader"></div> --}}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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