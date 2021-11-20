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
                  <h2>CS SANGA LE THANZIE</h2>
                <p>
                  Bienvenue sur le site web officiel du CS SANGA LE THANZIE<br>
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
                <p>
                  Former la jeunesse de notre pays afin de la rendre indépendante
                  et utile à la société..</p>
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Enseignement de qualite</h4>
                <p>
                  Relever le niveau de l’enseignement en luttant contre les
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
                    <br>
                    Elle est dotée d’une personnalité juridique accordée par le ministère de
                    la justice et droits humains par son arrêté ministériel
                    N°451/CAB/MIN/J&amp;DH/2010 du 09/11/2010 en tant qu’Association sans
                    but lucratif non confessionnelle...
                  </p>
               
              </div>
            </div>
            <div class="col-lg-12">
              
            </div>
          </div>
        </div>
        <div class="col-lg-6">
        <div class="item">
        <h3>NOS OBJECTIFS</h3>
           <p>
              Les objectifs que nous nous sommes assignés en créant cette
              gigantesque œuvre sont les suivants : <br> <br>
              Former la jeunesse de notre pays afin de la rendre indépendante
              et utile à la société. <br>
              Relever le niveau de l’enseignement en luttant contre les
              antivaleurs sous toutes ses formes ; <br>
              Contribuer à la formation de l’élite congolaise par un enseignement
              de qualité tel que prévue par la législation congolaise en la matière
              ;<br>
               Participer activement au chantier éducation prôné par le chef de
              l’état en vue de préparer le Congo de demain et par ricochet
              donner du travail à population...
              </p>
              
        </div>
        
        </div>
    
    <div id="present_ecole" class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>DE L’INTERVENTION  DE L’ETAT</h3>
                <p>
                Notre souci est de pouvoir accompagner les autorités de notre pays à rendre effectif l’enseignement obligatoire pour tous les enfants ;pour atteindre cet objectif ,qu’il nous soit permis de lancer un vibrant  appel au gouvernement de soutenir notre œuvre en la retenant parmi les écoles devant bénéficier des subventions de l’Etat dans le cadre de la politique de gratuité de l’enseignement primaire et secondaire tel que prescrit dans notre constitution. 
                    <br> <br>
                    Elle est dotée d’une personnalité juridique accordée par le ministère de
                    la justice et droits humains par son arrêté ministériel
                    N°451/CAB/MIN/J&amp;DH/2010 du 09/11/2010 en tant qu’Association sans
                    but lucratif non confessionnelle...
                  </p>
               
              </div>
            </div>
            <div class="col-lg-12">
            <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">lire plus</a></div>
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-6">
        <div class="item">
        <h3> DES  SECTIONS ORGANISEES</h3>
           <p>
          
Dans le souci d’offrir l’éducation à un plus grand nombre d’enfants et permettre ainsi à beaucoup des parents de nous faire confiance dans une grande diversité culturelle, nous organisons les enseignements au niveau de l’école maternelle, de l’école primaire et enfin de l’école secondaire. 

En ce qui concerne précisément l’école secondaire  notre complexe scolaire organise les enseignements dans les sections ci-après :
<br> <b> Section littéraire, option latin-philo</b>
<br> <b>Section  scientifique, options math physique et  biologie -chimie</b>
 <br><b> Section commerciale  de gestion.</b>
 <br> <b>Section pédagogique générale</b>
 <br> Section coupe et couture
 <br>Section technique, options électricité et mécanique générale

              </p>
              
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
                <span>243 99 29 01 370</span>
                <span>+1 646 806 34 73</span>
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
</body>
@endsection
