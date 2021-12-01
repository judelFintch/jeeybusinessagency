@extends('layouts.app')

@section('title')
    DETAIL
@endsection
@section('content')
  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>{{ $article->title }}</h6>
          <h2>{{ $article->resume }}</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  <div class="date">
                    <h6>{{ $article->created_at->format('M') }}<span>{{ $article->created_at->format('d') }}</span></h6>
                  </div>
                    <img height="500" width="500" src="{{ asset('storage/'.$article->picture) }}" alt="">
                </div>
                <div class="down-content">
                  <h4>{{ $article->resume }}</h4>
                  <p class="description">
                    {{ $article->content }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
