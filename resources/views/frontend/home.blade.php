@extends('apps.partials.app')
 @section('content')
    <div class="container-fluid bg-light p-0">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+243 97 054 63 11</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center border-end px-3">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>info@jeeybusinessagency.com</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center border-end px-3">
                    <small class="far fa-clock me-2"></small>
                    <small>Lun - Sam : 09 AM - 16 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-square border-end border-start" href="https://web.facebook.com/tony.ndola9010?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><i class="fa fa-building text-primary me-3"></i>JBA</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-3 py-lg-0">
                <a href="/" class="nav-item nav-link active">Acceuil</a>
                <a href="" class="nav-item nav-link">Apropos</a>
                <a href="" class="nav-item nav-link">Equipes</a>
                
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nos Services</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="" class="dropdown-item">Electricité</a>
                        <a href="" class="dropdown-item">Architecture</a>
                        <a href="" class="dropdown-item">Immobilier</a>
                        <a href="" class="dropdown-item">Construction</a>
                        <a href="" class="dropdown-item">Location</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('assets/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h5 class="text-light text-uppercase mb-3 animated slideInDown">Bienvenue chez Jeey Business Agency</h5>
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">Une entreprise de construction et d'immobilier</h1>
                                    <ol class="breadcrumb mb-4 pb-2">
                                        
                    
                                    </ol>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h5 class="text-light text-uppercase mb-3 animated slideInDown">Service de location</h5>
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">Transport, Electricité,Tourisme...</h1>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{asset('assets/img/about.jpg')}}" alt="" style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px;">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white">4</h1>
                                <h2 class="text-white">Ans</h2>
                                <h5 class="text-white mb-0">Experiences</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">Apropos</h6>
                            <h1 class="display-6 mb-0">Solutions uniques pour les résidences et les industries!</h1>
                        </div>
                        <p>La Société JBA est spécialisée dans la  <b>construction, rehabilitation renouvation de tout ouvrage de finie civile, routes, ponts...</b> <br>
                        <li>Offir la sous traitance aux entreprises.</li>
                        <li>Installation electrique domestiaque et des batiments.</li>
                        <li>Exploitation des conssessions minieres et recherche des produits des carrieres.</li>
                        <li>Peinture carrelages, architectures.</li>
                        <li>Forrage.</li>
                        <li>Vente, Achat et location des vehicules et engins lourds.</li>
                        <li>Formation des chauffeurs et Operateurs.</li>
                        <li>Service Immobilier(Vente,Achat et locaion: des appartements, maisons, parcelle, locaux...).</li>
                        <li>Service cleaner.</li>
                        <li>Services de demenagement .</li>
                        <li>Service de tourisme et hotelerie.</li>
                        <li>Service de voyages(facilitation d'obtention de passport, visa...).</li>

                        </p>

                        Jeeybusinessagency (JBA en sigle), fondé en 2019 en Republique Democratique Du Congo est présent dans plusieurs Province, telleque <b>Kinshasa, Lubumbashi, Kolwezi et Goma.</b>

                        </p>
                        

                        <div class="border-top mt-4 pt-4">
                            <div class="row g-4">
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                    <h6 class="mb-0">Ponctualité aux services</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                    <h6 class="mb-0">Service 24h/24 et 7j/7</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                                    <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                    <h6 class="mb-0">Rapidite, Qualit et Efficacite</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid my-5 p-0">
        <div class="row g-0">
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset('assets/img/fact-1.jpg')}}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">01</h1>
                        <h4 class="text-white mb-3">Construction</h4>
                        <p class="text-white">En génie civil,bâtiment, gestion de chantier et travaux publics.
</p>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset('assets/img/fact-2.jpg')}}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">02</h1>
                        <h4 class="text-white mb-3">Immobilier</h4>
                        <p class="text-white">Achat, la vente et locations </p>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset('assets/img/fact-3.jpg')}}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">03</h1>
                        <h4 class="text-white mb-3">Architecture</h4>
                        <p class="text-white"></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset('assets/img/fact-4.jpg')}}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">04</h1>
                        <h4 class="text-white mb-3">Location</h4>
                        <p class="text-white">Vehicules et engins lourds ...</p>
                        
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset('assets/img/fact-4.jpg')}}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">05</h1>
                        <h4 class="text-white mb-3">Tourisme</h4>
                        <p class="text-white">Kinshasa, Likasi, Lubumbashi, Kolwezi et Goma</p>
                        
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{asset('assets/img/fact-4.jpg')}}" alt="">
                    <div class="facts-overlay">
                        <h1 class="display-1">06</h1>
                        <h4 class="text-white mb-3">Formation chauffeurs</h4>
                        <p class="text-white"></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">POURQUOI NOUS CHOISIR!</h6>
                       
                    </div>
                    <p class="mb-5">Chez Jeeybusinessagency, on est tous comptent et proffessionnal dans la realisation des nos projets .

                    Notre passion commune : réaliser les projets que vous imaginez.

</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Rapidite</h6>
                            </div>
                            <span></span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Experience</h6>
                            </div>
                            <span></span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Qualite</h6>
                            </div>
                            <span></span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Professionnalisme</h6>
                            </div>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="{{asset('assets/img/feature.jpg')}}" alt="" style="object-fit: cover;">
                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px;">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                <h1 class="text-white">4</h1>
                                <h2 class="text-white">Ans</h2>
                                <h5 class="text-white mb-0">Experiences</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Nos Realisation</h6>
                        <h1 class="display-6 mb-0">Construction And Renovation Solutions</h1>
                    </div>
                </div>
                <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
                    <a class="btn btn-primary py-3 px-5" href="">More Services</a>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
              
                
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Appointment Start -->
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-white text-uppercase mb-2"></h6>
                        <h1 class="display-6 text-white mb-0"></h1>
                    </div>
                    <p class="text-white mb-0"></p>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark border-0" id="gname" placeholder="Gurdian Name">
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-dark border-0" id="gmail" placeholder="Gurdian Email">
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark border-0" id="cname" placeholder="Child Name">
                                    <label for="cname">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-dark border-0" id="cage" placeholder="Child Age">
                                    <label for="cage">Service Type</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-dark border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Get Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Notre Equipes</h6>
                        <h1 class="display-6 mb-0"></h1>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-0"></p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="{{asset('assets/img/team-1.jpg')}}" alt="">
                        <div class="team-text bg-white p-4">
                            <h5>Tonny NDOLA</h5>
                            <span>DG</span>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Temoignages</h6>
                        <h1 class="display-6 mb-0">Ce que disent nos clients satisfaits!</h1>
                    </div>
                    <p class="mb-4"></p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-users fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">520+</h1>
                            </div>
                            <h5 class="mb-0">Clients heureux</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">170+</h1>
                            </div>
                            <h5 class="mb-0">Projets réalisés</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection