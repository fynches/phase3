@extends('site.search.search-layout')

@section('header')
    
 <header class="redeem_head">
    <div class="container-fluid cont">
        <div class="row">
            <div class="fheader col-md-6">
                <a class="navbar-brand" href="http://fynches.codeandsilver.com">
        	         <img src="http://fynches.codeandsilver.com/public/front/img/logo.png" alt="Fynches" title="" id="fyn_logo">
        	    </a>
            </div>
            <div class="col-md-6" id="shop_list" style="font-family: 'Avenir-Book';">
                <div id="div_top_hypers">
                    <ul id="ul_top_hypers">
                        <li><a href="/about-us">ABOUT</a></li>
                        <li><a href="https://fynches.com/blog/" target="_blank">BLOG</a></li>
                        <li><a href="/">CONTACT US</a></li>
                        <li><a href="need-help">HELP</a></li>
                        <li><a href="/">LOG IN</a></li>
                        <li style="border: 1px solid #FF0055;border-radius: 25px;"><a href="/" style="color:#FF0055">SIGN UP</a></li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</header>
@stop

@section('search_content')
<section class="search_cont">
    <div class="container">
        <div class="row">
            <h5 class="text-center">FIND A GIFT PAGE</h5>
            <div class="form-group col-sm-6 text-center" id="search_input">
                <div class="inner-addon left-addon">
                      <i class="glyphicon glyphicon-search"></i>
                      <input type="text" id="page-search" class="form-control" placeholder="Search By Host's Last Name" />
                </div>
                <div class="loading"></div>
                <p id="search-count" class="text-center">We Found 0 Gift Pages</p>
            </div>
            
            <div id="search-row" class="row search_row" >
                
            </div>
            
        </div>
    </div>
</section>

@stop

@section('footer')
<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="row ">
				<div class="col-sm-3 col-md-3 col-lg-3 col-xs-12" style="text-align: center;">
					<a href="javascript:void(0)"><img src="http://fynches.codeandsilver.com/public/front/img/f-logo.png" alt="logo" title=""></a>
				</div>
				<div class="col-sm-6 col-md-6 col-xs-12 text-center" id="f-menu">
				    <div class="col-md-2 col-xs-2 pad"><a href="javascript:void(0)">ABOUT</a></div>
				    <div class="col-md-2 col-xs-2 pad"><a href="javascript:void(0)">BLOG</a></div>
				    <div class="col-md-3 col-xs-3 pad"><a href="#" data-toggle="modal" data-target="#contactPage">CONTACT US</a></div>
				    <div class="col-md-2 col-xs-2 pad"><a href="javascript:void(0)">FAQS</a></div>
				    <div class="col-md-3 col-xs-3 pad"><a href="javascript:void(0)">FIND A GIFT PAGE</a></div>
				</div>
				<div class="col-sm-3 col-md-3 col-xs-12 text-center home">
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
				<div class="fheader col-md-6">
					<p>© 2019 Fynches. All rights reserved</p>
				</div>
				<div class="fheader col-md-6">
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


