@extends('site.checkout.checkout-layout')

@section('header')
    
 <header class="check_header">
        <div class="container-fluid cont">
            <div class="row">
                <div class="col-md-8">
                   <a class="navbar-brand" href="http://fynches.codeandsilver.com">
        	         <img src="http://fynches.codeandsilver.com/public/front/img/logo.png" alt="Fynches" title="" id="fyn_logo">
        	        </a>
                </div>
                
                </div>
            </div>
        </div>    
    </header>
@stop

@section('checkout_content')
<section class="checkout_content">
    <div class="container-fluid cont">
        <div class="row" id="checkout_cont">
            <div class="col-md-3">
                <h5>CHECKOUT</h5>
            </div>
            <div class="col-md-3">
                <p>Already have an account?<a href="#"> Log In </a></p>
            </div>
            <div class="col-md-3">
                <p>Don't have an account? <a href="#"> Sign Up </a></p>
            </div>
            <div class="col-md-3">
                <button class="btn common btn-border" id="btn_blk">CONTINUE SHOPPING</button>  
            </div>
        </div>
    </div>
</section>

<section class="step_1">
    <div class="container-fluid cont">
        <div class="row">
            <h5>STEP 1: CONFIRM YOUR GIFTS</h5>
        </div>
    </div>
</section>
@stop



@section('footer')
<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-3 col-lg-3">
					<a href="javascript:void(0)"><img src="http://fynches.codeandsilver.com/public/front/img/f-logo.png" alt="logo" title=""></a>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<ul class="f-menu">
						<li><a href="javascript:void(0)">ABOUT</a></li>
						<li><a href="javascript:void(0)">BLOG</a></li>
						<li><a href="javascript:void(0)">CONTACT US</a></li>
						<li><a href="javascript:void(0)">FAQS</a></li>
						<li><a href="javascript:void(0)">FIND A GIFT PAGE</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-3 col-lg-3 text-right home">
					<ul class="social">
						<li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
						<li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
						<li><a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
					</ul> 
				</div>
			</div>
		</div>
		<div class="footer-btm home-btm">
			<div class="row align-items-center">
				<div class="col-md-7 col-lg-7">
					<p>&copy; 2019 Fynches. All rights reserved</p>
				</div>
				<div class="col-md-5 col-lg-5 text-right">
					<ul>
						<li><a href="javascript:void(0)">Privacy Policy</a></li>
						<li><a href="javascript:void(0)">Terms and Conditions</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
@stop


