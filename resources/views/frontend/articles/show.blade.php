@extends('layouts.app')

@section('title')
    DETAIL
@endsection
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Acceuil</a></li>
          <li><a href="">Pulbications</a></li>
        </ol>
        <h2>{{ $article->title }}</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{ asset('storage/'.$article->picture) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
               
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
                {{ $article->content }}
                </p>

              </div>
            </article><!-- End blog entry -->
            </div>

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
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->


@endsection
