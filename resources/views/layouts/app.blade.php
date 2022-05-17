<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/jquery/jquery.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   
    <title>@yield('title')</title>
        @yield('styles')
</head>

<body class="tt-page-product-single">
       <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@csnsangalethanzie.org">info@csnsangalethanzie.org</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+243 99 29 01 370</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="{{route('home.index')}}">csnsangalethanzie</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{route('home.index')}}">Acceuil</a></li>
          <li class="dropdown"><a href="#"><span>Apropos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('home.about')}}">Historique</a></li>
              <li><a href="{{route('front.bloc_un')}}">Bloc-1</a></li>
              <li><a href="{{route('front.bloc_deux')}}">Bloc-2</a></li>
              <li><a href="{{route('front.visionnaire')}}">Visionnaire</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Organisations</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('front.maternelle')}}">Maternelle</a></li>
              <li><a href="{{route('front.primaire')}}">Primaire</a></li>
              <li><a href="{{route('front.secondaire')}}">Secondaire</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Sections</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Maternelle</a></li>
              <li><a href="#">Primaire</a></li>
              <li><a href="#">Secondaire</a></li>
            </ul>
          </li>
          <li><a href="">Gallerie</a></li>
          <li><a href="">Actualités</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    <main>
        @yield('content')
    </main>

     <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h4>Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
      </div>
      <div class="col-lg-6">
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Menu</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Acceuil</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Apropos</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Sections</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Conditions</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Palmaresse</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Actualités</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#"></a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h3>About Eterna</h3>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span></span></strong>. All Rights Reserved
  </div>
  <div class="credits">
 
   Fintchweb
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61975c6f6885f60a50bc894c/1fkrk25jv';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
    
</body>
</html>
