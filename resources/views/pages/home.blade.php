@extends('layouts.main')

@section('title')
  Welcome
@endsection

@section('content')
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url('img/blog/1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Ordinary guy who love to code</h2>
                <p>The adventurer of Pascal, Haskell, C++, HTML, CSS, Javascript, PHP, XML, Java, and keep growing...</p>
                <a href="{{ url('about/') }}" class="btn-get-started scrollto">About Me</a>
                <a href="{{ url('posts/') }}" class="btn-get-started scrollto">Little Bit of My Writing</a>
                <a href="{{ url('contact/') }}" class="btn-get-started scrollto">Contact Me</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/blog/2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Also music</h2>
                <p>A former violinist and drummer, may one day be able to get to play it again</p>
                <a href="{{ url('about/') }}" class="btn-get-started scrollto">About Me</a>
                <a href="{{ url('posts/') }}" class="btn-get-started scrollto">Little Bit of My Writing</a>
                <a href="{{ url('contact/') }}" class="btn-get-started scrollto">Contact Me</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/blog/3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Not forgetting the food</h2>
                <p>Totally food lover, with a minimum 4 times to eat a day, except the spicy one...</p>
                <a href="{{ url('about/') }}" class="btn-get-started scrollto">About Me</a>
                <a href="{{ url('posts/') }}" class="btn-get-started scrollto">Little Bit of My Writing</a>
                <a href="{{ url('contact/') }}" class="btn-get-started scrollto">Contact Me</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/blog/4.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Who is grateful for having great friends</h2>
                <p>Old or new, far or near, nerds or swags, it's nice to be your friend</p>
                <a href="{{ url('about/') }}" class="btn-get-started scrollto">About Me</a>
                <a href="{{ url('posts/') }}" class="btn-get-started scrollto">Little Bit of My Writing</a>
                <a href="{{ url('contact/') }}" class="btn-get-started scrollto">Contact Me</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/blog/5.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Smile always :)</h2>
                <br>
                <a href="{{ url('about/') }}" class="btn-get-started scrollto">About Me</a>
                <a href="{{ url('posts/') }}" class="btn-get-started scrollto">Little Bit of My Writing</a>
                <a href="{{ url('contact/') }}" class="btn-get-started scrollto">Contact Me</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <footer id="footer">
@endsection