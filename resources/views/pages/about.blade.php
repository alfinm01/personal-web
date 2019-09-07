@extends('layouts.main')

@section('title')
  about
@endsection

@section('content')

  @include('partials._header')

  	<main id="main">

	    <!--==========================
	      About Us Section (Projects)
	    ============================-->
	    <section id="about">
	      <div class="container" style="padding-top: 50px;">

	        <header class="section-header">
	          <h3>About Me</h3>
	          <p>Hi, my name is Alfian Maulana Ibrahim, an informatics engineer (soon though), from Ungaran, Central Java, Indonesia<br>Here are some of my projects</p>
	        </header>

	        <div class="row about-cols">

	        @foreach ($projects as $key => $item)
	          <div class="col-md-4 wow fadeInUp" data-wow-delay="{{ ($key+1)*(0.1) }}s">
	            <div class="about-col">
	              <div class="img">
	                <img src="{{ url('images/'.$item->image) }}" alt="" class="img-fluid">
	                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
	              </div>
	              <h2 class="title"><a href="#">{{ $item->project_title }}</a></h2>
	              <p>
	                {!! $item->description !!}
	              </p>
	            </div>
	          </div>
	        @endforeach	    

	        </div>

	      </div>
	    </section><!-- #about -->

	    <!--==========================
	      Services Section (Personal Qualities (Language, Interests))
	    ============================-->
	    <section id="services">
	      <div class="container">

	        <header class="section-header wow fadeInUp">
	          <h3>Personal Qualities</h3>
	          <p>A few things about myself</p>
	        </header>

	        <div class="row">

	       	@foreach ($personal_qualities as $key => $item)
	          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
	            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
	            <h4 class="title"><a href="">{{ $item->topic }}</a></h4>
	            <p class="description">{!! $item->description !!}</p>
	          </div>	    
	        @endforeach

	        </div>

	      </div>
	    </section><!-- #services -->

	    <!--==========================
	      Call To Action Section (ITB)
	    ============================-->

	    <section id="call-to-action" class="wow fadeIn">
	      <div class="container text-center">
	        <h3>{{ $institution->institution }}</h3>
	        <p>{!! $institution->description !!}</p>
	        <a class="cta-btn" href="https://www.itb.ac.id/">Go to BIT website</a>
	      </div>
	    </section><!-- #call-to-action -->

	    <!--==========================
	      Skills Section
	    ============================-->
	    <section id="skills">
	      <div class="container">

	        <header class="section-header">
	          <h3>Programming Skills</h3>
	          <p>Skills I have obtained till today</p>
	        </header>

	        <div class="skills-content">

	          <div class="progress">
	            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
	              <span class="skill">HTML <i class="val">80%</i></span>
	            </div>
	          </div>

	          <div class="progress">
	            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
	              <span class="skill">CSS <i class="val">75%</i></span>
	            </div>
	          </div>

	          <div class="progress">
	            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
	              <span class="skill">JavaScript <i class="val">50%</i></span>
	            </div>
	          </div>

	          <div class="progress">
	            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
	              <span class="skill">PHP <i class="val">65%</i></span>
	            </div>
	          </div>

	        </div>

	      </div>
	    </section>

	    <!--==========================
	      Facts Section (fact)
	    ============================-->
	    <section id="facts"  class="wow fadeIn">
	      <div class="container" style="padding-bottom: 30px;">

	        <header class="section-header">
	          <h3>Facts</h3>
	          <p>Believe it or not</p>
	        </header>

	        <div class="row counters">

	        
	          <div class="col-lg-3 col-6 text-center">
	            <span data-toggle="counter-up">{{ $facts->internship }}</span>
	            <p>Internships</p>
	          </div>

	          <div class="col-lg-3 col-6 text-center">
	            <span data-toggle="counter-up">3</span>
	            <p>Projects</p>
	          </div>

	          <div class="col-lg-3 col-6 text-center">
	            <span data-toggle="counter-up">{{ $facts->code_hour }}</span>
	            <p>Hours Of Code Per Day</p>
	          </div>

	          <div class="col-lg-3 col-6 text-center">
	            <span data-toggle="counter-up">{{ $facts->competition }}</span>
	            <p>Competition Experiences</p>
	          </div>

	        </div>

	      </div>
	    </section><!-- #facts -->
	    

	    <!--==========================
	      Clients Section (Sanbercode)
	    ============================-->
	    <section id="clients" class="wow fadeInUp">
	      <div class="container">

	        <header class="section-header">
	          <h3>Affiliates</h3>
	        </header>

	        <div class="owl-carousel clients-carousel">
	        @foreach($affiliates as $item)
	          <img src="{{ url('images/'.$item->logo) }}" alt="" style="height: 150px; width: auto;">
	        @endforeach
	        </div>

	      </div>
	    </section><!-- #clients -->

	    <!--==========================
	      Testimonials Section (Testimonials)
	    ============================-->
	    <section id="testimonials" class="section-bg wow fadeInUp">
	      <div class="container">

	        <header class="section-header">
	          <h3>Testimonials</h3>
	        </header>

	        <div class="owl-carousel testimonials-carousel">

	        @foreach ($testimonials as $item)
	          <div class="testimonial-item">
	            <img src="{{ url('images/'.$item->photo) }}" class="testimonial-img" alt="">
	            <h3>{{ $item->name }}</h3>
	            <h4>{{ $item->description }}</h4>	        
	              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
	            	<p>{!! substr($item->testimony, 0, 50) !!}{{ strlen($item->testimony) > 50 ? "..." : "" }}</p>
	              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
	          </div>
	        @endforeach

	        </div>

	      </div>
	    </section><!-- #testimonials -->
	    

	</main>

  @include('partials._footer')

@endsection