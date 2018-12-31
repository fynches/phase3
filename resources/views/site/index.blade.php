@extends('layouts.app_front')

@section('header')
  @include('layouts.header')
@stop

@section('pagetitle', 'Home')


@section('content')

<!-- Banner Sec -->

@if(isset($banner_section_block))
		{!!html_entity_decode($banner_section_block->description)!!}
@endif

@if(isset($work_section_block))
		{!!html_entity_decode($work_section_block->description)!!}
@endif

@if(isset($happiness_section_block))
		{!!html_entity_decode($happiness_section_block->description)!!}
@endif
<!-- Banner Sec -->
<section class="banner-sec">
	<div class="inner-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-7 col-xl-6 order-sm-1 order-md-2 order-lg-2 order-xl-2">
					<div class="rgt-img">
						<img data-aos="fade-up" src="{{ asset('public/front/img/ballon.png')}}" alt="ballon" title="" class="img-fluid" />
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-5 col-xl-6 order-sm-2 order-md-1 order-lg-1 order-xl-1">
					<div class="lft-cnt" >
						<h2 class="">The First Gift Registry for Kids.</h2>
						<p>The easiest way for you to let friends and family gift activities to your child on their birthday.</p>
						<button class="btn common pink-btn" data-toggle="modal" data-target="#largeModalS">CREATE YOUR FREE GIFT PAGE</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gift-page">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-5 col-lg-5">
					<h3>Find a Fynches gift page</h3>
				</div>
				<div class="col-sm-12 col-md-7 col-lg-7">
					<form id-"home-search" method="GET" action="/search">
						<input id="host_name" type="text" name="last_name" placeholder="Search By Hosts Last Name">
						<button>SEARCH</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End -->
<!-- How It Work Sec -->
<section class="how-it-work">
	<div class="container">
		<div class="row">
			<div class="col-md-12"><h2 class="title">How It Works</h2></div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-4 text-center pt-3">
				<div class="cust-icon"><img src="{{ asset('public/front/img/flag.png')}}" alt="flag" title=""></div>
				<h3>Create Your Gift Page</h3>
				<p>Fynches will auto-magically create a gift page for your child that you can easily customize.</p>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 text-center pt-3">
				<div class="cust-icon"><img src="{{ asset('public/front/img/Gift.png')}}" alt="gift" title=""></div>
				<h3>Add Your Gifts</h3>
				<p>Choose form our amazing collection of curated gifts and experiences and add them to your gift page.</p>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 text-center pt-3">
				<div class="cust-icon"><img src="{{ asset('public/front/img/bird.png')}}" alt="bird" title=""></div>
				<h3>Share Your Gift Page</h3>
				<p>Easily share your Fynches gift page with friends and family so they can purchase a gift for your child.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center"><button class="btn common pink-btn" data-toggle="modal" data-target="#largeModalS">CREATE YOUR GIFT PAGE</button></div>
		</div>
	</div>
</section>
<!-- End -->
<!-- Gifts and Experiences Sec -->
<section class="experience">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="title">Gifts and Experiences Your Child Will Love.</h2>
				<p>From swimming lessons to adventure parks we have everything you need to make your child’s next gift an unforgettable experience.</p>
				<button class="btn common btn-border" data-toggle="modal" data-target="#largeModalS">CREATE YOUR GIFT PAGE</button>
			</div>
		</div>
	</div>
</section>
<!-- End -->
<!-- Gifting Sec -->
<section class="gifting">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5 col-lg-5 order-sm-1 order-md-2 order-lg-2"><img src="{{ asset('public/front/img/Gifting-Easy.png')}}" alt="Gifting" title="" class="img-fluid"></div>
			<div class="col-sm-12  col-md-7 col-lg-7 order-sm-2 order-md-1 order-lg-1">
				<h2 class="title">Gifting Made Easy-Peasy For You and Your Guests</h2>
				<p>Fynches takes the guessing out of gifting. No more dreaded gift duplicates, endless gift questions, or last-minute trips to a store.</p>
				<ul>
					<li>Reduce the time your friends and family have to spend searching for a gift.</li>
					<li>Avoid duplicate gifts, over-gifting, and constantly answering the “what should we get?” question.</li>
					<li>Help friends and family gift experiences that will help your child grow and create magical memories.</li>
				</ul>
				<button class="btn common pink-btn" data-toggle="modal" data-target="#largeModalS">CREATE YOUR GIFT PAGE</button>
			</div>
		</div>
	</div>
</section>
<!-- End -->
<!-- Testimonial section -->

@include('site.testimonial')

<!-- End -->
<!-- Happiness Is Our Mission Sec -->
<section class="our-mission">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="title">Happiness Is Our Mission </h2>
				<p>We believe that providing fun and enriching gift experiences helps children lead healthier and happier lives.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="lft-img">
					<img src="{{ asset('public/front/img/img1.png')}}" alt="" title="" class="img-fluid">
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
				<ul>
					<li>Experiences help kids develop friendships, empathy, curiosity, and set them on a path of self-discovery.</li>
					<li>Gifts that offer a child a chance to learn, explore, and have fun offer lasting memories they will cherish forever. </li>
					<li>Scientific research has proven that providing kids with meaningful experiences helps them lead happier lives.</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- End -->

<!-- SignUp Model -->
@include('site.signup.signup-modal')


<!-- SignUp Model -->
@include('site.user.signin-modal')

@include('site.user.password-modal')



@section('jsscript')
<script type="text/javascript" src="{{ asset('public/front/common/signup/signup.js')}}"></script>
<script type="text/javascript">	
	$( document ).ready(function() {
		AOS.init({
			duration: 1200,
		});
	});
</script>
@endsection

<!-- SignIn Model -->
<div class="modal fade user-mdl signin" id="signin" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header text-center">
      	<img src="{{ asset('public/front/img/logo.png')}}" alt="Fynches" title="">
        <h2 class="title">Sign In</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-12">
      			<form>
      				<div class="form-group">
					  <label for="usr">E-mail<sup>*</sup></label>
					  <input type="text" class="form-control">
					</div>
					<div class="form-group pass">
					  <label for="usr">Password</label>
					  <input type="text" class="form-control">
					</div>
					<a href="javascript:void(0)" class="forgot">Forgot Password</a>
					<div class="btns">
						<button class="btn common pink-btn">SIGN UP WITH EMAIL</button>
						<button class="btn common drk-blue">SIGN UP WITH FACEBOOK</button>
					</div>
      			</form>
      			<p>By creating your Fynches account you agree to your <a href="javascript:void(0)">Term of Use</a> and <a href="javascript:void(0)">Privacy Policy</a>.</p>
      			<p>Already have an account? <a href="javascript:void(0)">Log In</a></p>
      		</div>
      	</div>
      </div>
    </div>
  </div>
</div>
<!-- End -->
@include('site.gift.contact-us')
@endsection