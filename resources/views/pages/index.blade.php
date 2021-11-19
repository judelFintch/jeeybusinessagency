@extends('layouts.app')
@section('content')
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>
      <div class="video-overlay header-text">
          <div class="container">
          <div class="row">
              <div class="col-lg-6">
                <div class="caption">
                  <h2>Complexe le THANZIE</h2>
                <p>
                  Bienvenue sur le site web officiel du Complexe Scolaire THANZIE<br>
                  Nous sommes un Complexe Scolaire se trouvant dans la ville de Lubumbashi,
                  en République Démocratique du Congo. 
                  Notre école fonctionne sur deux sites : (CSTHAZIE 1 & CSTHAZIE 2) Notre complexe scolaire dispose de deux principaux bâtiments dont le
                  premier bloc situé au numéro 3539 de l’avenue Kalombo au quartier
                  Gambela II abrite l’école maternelle et primaire tandis que le deuxième
                  bloc sis croisement des avenues Kasangulu et de l’Eglise abrite l’école
                  secondaire. Les deux imposants bâtiments sont construits en matériaux
                  durables avec une architecture moderne offrant à cet effet une garantie
                  de bonnes conditions d’études aux élèves qui y sont encadrés.
              </p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="{{route('about_us')}}">Lire plus</a></div>
              </div></div>
              </div>
              <div class="col-lg-6">
              <div class="caption">
              <p>
              Bienvenue sur le site web officiel du Complexe Scolaire THANZIE<br>
                  Nous sommes un Complexe Scolaire se trouvant dans la ville de Lubumbashi,
                  en République Démocratique du Congo. 
                  Notre école fonctionne sur deux sites : (CSTHAZIE 1 & CSTHAZIE 2) Notre complexe scolaire dispose de deux principaux bâtiments dont le
                  premier bloc situé au numéro 3539 de l’avenue Kalombo au quartier
                  Gambela II abrite l’école maternelle et primaire tandis que le deuxième
                  bloc sis croisement des avenues Kasangulu et de l’Eglise abrite l’école
                  secondaire. Les deux imposants bâtiments sont construits en matériaux
                  durables avec une architecture moderne offrant à cet effet une garantie
                  de bonnes conditions d’études aux élèves qui y sont encadrés.
              </p>
              </div>
            </div>
          </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
<br>
  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Discipline et Travail</h4>
                <p>Former la jeunesse de notre pays afin de la rendre indépendante
et utile à la société.</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Jeunes utiles</h4>
                <p>Former la jeunesse de notre pays afin de la rendre indépendante
et utile à la société..</p>
              </div>
            </div>
            
           
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Enseignement de qualite</h4>
                <p>Relever le niveau de l’enseignement en luttant contre les
antivaleurs sous toutes ses formes.</p>
              </div>
            </div>
            
            
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Nos Publications</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="categories">
            <h4>Valves</h4>
            <ul>
              <li><a href="#">RÉGLEMENT D'ORDRE INTÉRIEUR</a></li>
              <li><a href="#">Condition d'inscription</a></li>
              <li><a href="#">Offres d'emploi</a></li>
              
            </ul>
            <div class="main-button-red">
              <a href="meetings.html">Tout Voir</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                    <span>10.10.2021</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>10</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>New Lecturers Meeting</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                  <span>10.10.2021</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Online Teaching Techniques</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                  <span>10.10.2021</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>26</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Higher Education Conference</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <div class="price">
                  <span>10.10.2021</span>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>30</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Student Training Meetup</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="apply-now" id="apply" id="">
    <div id="present_ecole" class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>LA PRESENTATION</h3>
                <p>
                    NSANGA LE THANZIE est une Association Sans But Lucratif qui œuvre
                    dans le secteur de l’éducation et qui offre un excellent cadre de
                    formation pour la jeunesse de la République Démocratique du Congo ;
                    Le siège social de notre Asbl est situé au numéro 3539 de l’avenue
                    Kalombo au quartier Gambela non loin de l’Université de Lubumbashi
                    dans la Province du Haut- Katanga.
                    Elle a été créée à Lubumbashi en date du 09/08/2010 par des
                    congolais soucieux de promouvoir l’éducation en République
                    Démocratique du Congo en général et plus particulièrement à
                    Lubumbashi en ciblant les quartiers les plus reculés dont les parents ont
                    un revenu modeste.
                    Elle est dotée d’une personnalité juridique accordée par le ministère de
                    la justice et droits humains par son arrêté ministériel
                    N°451/CAB/MIN/J&amp;DH/2010 du 09/11/2010 en tant qu’Association sans
                    but lucratif non confessionnelle ;
                    Le complexe scolaire NSANGA LE THANZIE a été agréé par le
                    ministère de l’enseignement primaire et secondaire à travers l’arrêté
                    ministériel numéro MINEPSP/CABMIN/0467/2010 du 06 septembre
                    2010 et il fonctionne normalement jusqu’à ce jour..</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">lire plus</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="">
            
               
                    <span>DES OBJECTIFS</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
               
            </article>
           
            
            Les objectifs que nous nous sommes assignés en créant cette
gigantesque œuvre sont les suivants :
o Former la jeunesse de notre pays afin de la rendre indépendante
et utile à la société.
o Relever le niveau de l’enseignement en luttant contre les
antivaleurs sous toutes ses formes ;
o Contribuer à la formation de l’élite congolaise par un enseignement
de qualité tel que prévue par la législation congolaise en la matière
;
o Participer activement au chantier éducation prôné par le chef de
l’état en vue de préparer le Congo de demain et par ricochet
donner du travail à population.
        </div>
        </div>
      </div>
    </div>
  </section>
 

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>243 994 33 55 78</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@csnsangalethanzie</span>
              </li>
              <li>
                <h6>Address</h6>
                <span>A Kasangulu et de l’Eglise abrite l’école</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.csnsangalethanzie.org</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 CS SANGA LE THANZIE., Ltd. All Rights Reserved. 
         
        </p>
    </div>
  </section>
  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  
@endsection