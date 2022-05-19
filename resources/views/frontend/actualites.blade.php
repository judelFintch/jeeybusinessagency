@extends('layouts.app')

@section('title')
    ACCEUIL
@endsection
@section('content')

<main id="main">
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="/">Acceuil</a></li>
      <li>Publications</li>
    </ol>
    <h2>Nos Publications</h2>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container">

    <div class="row no-gutters">
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
          @foreach($articles as $article)
            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('storage/'.$article->picture) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{ $article->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('article.voirplus', $article->key) }}">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('article.voirplus', $article->key) }}"><time datetime="2020-01-01">{{ $article->created_at->format('Y-m-d') }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ route('article.voirplus', $article->key) }}">0</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{ $article->resume }}
                </p>
                <div class="read-more">
                  <a href="{{ route('article.voirplus', $article->key) }}">Lire plus</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>
          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">
              <h3 class="sidebar-title">Telechargez</h3>
              <div class="sidebar-item categories">
                <ul>
                @foreach($valves as $valve)
                  <li><a href="{{ asset('storage/'.$valve->files) }}">{{ $valve->title ?? "" }} </a></li>
                @endforeach
                  
                </ul>
              </div><!-- End sidebar categories-->

              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
  </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

  
@endsection
