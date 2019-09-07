@extends('layouts.main')

@section('title')
  Contact
@endsection

@section('content')

  @include('partials._header')

	  <main id="main">
	  	<section id="contact" class="section-bg wow fadeInUp">
	      <div class="container" style="padding-top: 50px;">

	        <div class="section-header">
	          <h3>Contact Me</h3>
	        </div>

	        <div class="row contact-info">

	          <div class="col-md-4">
	            <div class="contact-address">
	              <i class="ion-ios-location-outline"></i>
	              <h3>Address</h3>
	              <address>153A Tubagus Ismail Raya Street, BD 40134, Indonesia</address>
	            </div>
	          </div>

	          <div class="col-md-4">
	            <div class="contact-phone">
	              <i class="ion-ios-telephone-outline"></i>
	              <h3>Phone Number</h3>
	              <p><a href="tel:+155895548855">+62 813 2666 1043</a></p>
	              <p><a href="tel:+155895548855">+62 8953 4490 0056</a></p>
	            </div>
	          </div>

	          <div class="col-md-4">
	            <div class="contact-email">
	              <i class="ion-ios-email-outline"></i>
	              <h3>Email</h3>
	              <p><a href="mailto:info@example.com">alfinm01@yahoo.co.id</a></p>
	              <p><a href="mailto:info@example.com">arrestral@gmail.com</a></p>
	            </div>
	          </div>

	        </div>

	        <div class="form">
	          <div id="sendmessage">Your message has been sent. Thank you!</div>
	          <div id="errormessage"></div>
	          <form action="{{ url('/contact/message') }}" method="posts" role="form" class="contactForm">
	            <div class="form-row">
	              <div class="form-group col-md-6">
	                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
	                <div class="validation"></div>
	              </div>
	              <div class="form-group col-md-6">
	                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
	                <div class="validation"></div>
	              </div>
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
	              <div class="validation"></div>
	            </div>
	            <div class="form-group">
	              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for me" placeholder="Message"></textarea>
	              <div class="validation"></div>
	            </div>	            	            
	            <div class="form-group text-center"><button type="submit">Send Message</button></div>
	            {{csrf_field()}}
	          </form>
	        </div>

	      </div>
	    </section><!-- #contact -->
	  </main>

  @include('partials._footer')

@endsection