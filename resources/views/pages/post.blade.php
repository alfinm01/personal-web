@extends('layouts.main')

@section('title')
  My Writing
@endsection

@section('content')

  @include('partials._header')

  <main id="main">
    <section id="portfolio"  class="section-bg" >
      <div class="container" style="padding-top: 50px;">

        <header class="section-header">
          <h3 class="section-title">My Writing</h3>
        </header>

        <div class="row">
          <form class="form-inline my-2 my-lg-0" style="float: none; margin: 0 auto;">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <a href="{{ url('posts/') }}"><li data-filter="*" class="filter-active">All</li></a>
              @foreach ($posts as $article)

                <a href="{{ url('posts/category/'.$article->category->id) }}"><li>{{ $article->category->category }}</li></a>

              @endforeach
            </ul>
          </div>
        </div>

        <div class="row"> <!-- class="portfolio-container" -->

          @foreach ($posts as $key => $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay=" {{ ($key+1)*(0.1) }}s ">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ url('images/'.$item->image) }}" class="img-fluid" alt="" style="height: 100%; width: 100%;">
                <a href="{{ url('images/'.$item->image) }}" data-lightbox="portfolio" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ url('posts/'.$item->slug) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">{{ $item->title }}</a></h4>
                @foreach ($item->tag as $tag)
                  <a href="{{ url('posts/tag/'.$tag->id) }}"><button class="btn btn-success" style="display: inline; margin-bottom: 10px;">{{ $tag->tag }}</button></a>
                @endforeach
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- #portfolio -->
  </main>

  @include('partials._footer')

@endsection