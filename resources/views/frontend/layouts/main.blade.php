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
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">Band Skansa</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">Profil Band</a></li>
          <li><a class="nav-link scrollto" href="/#services">Jadwal Latihan</a></li>
          <li><a class="nav-link scrollto " href="/#work">Galeri</a></li>
          <li><a class="nav-link scrollto " href="/#blog">Blog</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
          {{-- <li class="nav-item login-menu" style="padding-left: 15rem">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li> --}}

          {{-- @auth
          <li class="nav-item dropdown" style="padding-left: 15rem">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat datang, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" style="margin-right: 15rem">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Keluar</button>
                </form>
                
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item login-menu" style="padding-left: 15rem">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
          @endauth --}}
         

        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav>
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
 @yield('container')

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
@include('frontend.partials.footer')

  <div id="preloader"></div>
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