@extends('layouts.app')

@section('title')
    ACCEUIL
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Bienvenue sur <span>sur notre site</span></h2>
                <p class="animate__animated animate__fadeInUp">Une école d'excellence pour l'étude et la formation de votre enfant. La qualité, les meilleurs enseignants, les programmes scolaires conçues sur-mesure, des salles de classes avec de fournitures modernes..</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Lire Plus</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated fanimate__adeInDown">Discipline <span>Prosperite- Travail</span></h2>
                <p class="animate__animated animate__fadeInUp">Notre devise etant de promoivoir la disciplene, le travail et l'exellence l'ecole se dote d'un espace et des enseignants competant.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Lire plus</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Etudiez  <span>en ligne</span></h2>
                <p class="animate__animated animate__fadeInUp">Avec notre plate forme d'etude en ligne.</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">
        <div class="section-title">
          <h2> Sections organisées</h2>
          Pour un bon encadrement et la réussite de la formation des enfants, notre Ecole organise differentes options. Nous visons l'excellence dans chaque option. Nos options sont les suivantes
        </div>
       
        <div class="row">
          <div class="col-lg-4">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h3><a href="details_options.html">Maternelle</a></h3>
              <p>L’enseignement maternel est réglementé dans notre pays, il est doté d’un programme national en cours de validité. La documentation sur la didactique spéciale des activités et les prévisions des matières est disponible</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h3><a href="">Primaire</a></h3>
              <p>L’école primaire constitue l’enseignement fondamental dans le cursus scolaire d’un élève. C’est le socle par excellence sur lequel se tissera toute sa formation ultérieure, son instruction à venir et même son éducation pour la vie</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h3><a href="">Secondaire</a></h3>
              <p>L’école primaire constitue l’enseignement fondamental dans le cursus scolaire d’un élève. C’est le socle par excellence sur lequel se tissera toute sa formation ultérieure, son instruction à venir et même son éducation pour la vie</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Featured Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Apropos de nous.</h3>
              <p>
                <b>NSANGA LE THANZIE</b> est une Association Sans But Lucratif qui œuvre dans le secteur de l’éducation ; situé au numéro <b>165 </b>de l’avenue Kasangulu coin de l’Eglise et <b>3539 </b>de l’avenue Kalombo  au quartier Gambela dans la Province du Haut- Katanga. Elle a été créée à Lubumbashi en date du <b> 08/2010</b> par des congolais soucieux de promouvoir l’éducation en République Démocratique du Congo.
                  Elle est dotée d’une personnalité juridique accordée par le ministère de la justice et droits humains par son arrêté ministériel <b> N°451/CAB/MIN/J&DH/2010 du 09/11/2010</b>; 
                Avec comme objectifs de Former la jeunesse de notre pays afin de la rendre <u>indépendante</u> et <u>utile</u> à la société.
                Relever le niveau de l’enseignement en luttant contre les antivaleurs sous toutes ses formes ;
                Contribuer à la formation de l’élite congolaise par un enseignement de qualité tel que prévue par la législation congolaise en la matière ;
                Participer activement au chantier éducation prôné par le chef de l’état en vue de préparer le Congo de demain et par ricochet donner du travail à la population....
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Nos Options organisées</h2>
          Dans le souci d’offrir l’éducation à un plus grand nombre d’enfants et permettre ainsi à beaucoup des parents de nous faire confiance dans une grande diversité culturelle, nous organisons les enseignements au niveau de l’école maternelle, de l’école primaire et enfin de l’école secondaire. En ce qui concerne précisément l’école secondaire notre complexe scolaire organise les enseignements dans les sections ci-après :
        </div>
        

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="latin_op"><a href="">Latin-philo</a></h4>
              <p class="option_sec">Formation dans la la section Litteraire a partir de la 3 secondaire</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Coupe  et Couture</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              <p> </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Electricité</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Biologie et Chimie</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Math et Physique</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Commerciale de gestion</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
@endsection
