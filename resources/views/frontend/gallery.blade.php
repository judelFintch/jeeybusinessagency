@extends('layouts.app')

@section('title')

    ACCEUIL
@endsection
@section('content')
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="/">Acceuil</a></li>
          <li>Gallerie</li>
        </ol>
        <h2>Gallerie Photos</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Toutes les Photos</li>
             
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
        @foreach($galleries as $gallery)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/'.$gallery->picture) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Photo</h4>
                <p></p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/'.$gallery->picture) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach          
        </div>
      </div>
    </section><!-- End Portfolio Section -->
  </main><!-- End #main -->
@endsection
