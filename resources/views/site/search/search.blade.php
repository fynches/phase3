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
                        <li><a href="">ABOUT</a></li>
                        <li><a href="">BLOG</a></li>
                        <li><a href="">CONTACT US</a></li>
                        <li><a href="">HELP</a></li>
                        <li><a href="">LOG IN</a></li>
                        <li style="border: 1px solid #FF0055;border-radius: 25px;"><a href="" style="color:#FF0055">SIGN UP</a></li>
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
                      <input type="text" class="form-control" placeholder="Search By Host's Last Name" />
                </div>
                
                <p class="text-center">We Found 1 Gift Page</p>
            </div>
            
            <div class="row search_row" >
                <div class="col-md-12" id="search_result">
                    <div class="col-md-2">
                        <img src="http://fynches.codeandsilver.com/public/front/img/prof_pic.png" >
                    </div>
                    <div class="col-md-8">
                        <p><bold>Page Title:</bold> Join us for Charlie's Birthday</p>
                        <p><bold>Host:</bold> Sarah</p>
                        <p><bold>Child:</bold> Charlie</p>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-border btn-purp">VIEW GIFT PAGE</button>
                    </div>
                </div>
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


