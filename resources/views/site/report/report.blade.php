@extends('site.report.report-layout')

@section('header')
    
 <header class="report_head">
    <div class="container-fluid cont">
        <div class="row">
            <div class="col-md-8">
                <a class="navbar-brand" href="http://fynches.codeandsilver.com">
        	         <img src="http://fynches.codeandsilver.com/public/front/img/logo.png" alt="Fynches" title="" id="fyn_logo">
        	    </a>
            </div>
            <div class="col-md-4" id="shop_list">
                <div id="div_top_hypers">
                    <ul id="ul_top_hypers">
                        <li><a href="" class="a_top_hypers"> HELP</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MY ACCOUNT <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/account">ACCOUNT SETTINGS</a></li>
                                <li><a href="/gift-dashboard">DASHBOARD</a></li>
                                <li><a href="{{ url('/logout') }}">LOGOUT</a></li>
                            </ul>
                        </li>
                    </ul>    
                </div>
            </div>
        </div>
    </div>
</header>
@stop

@section('report_content')

<section class="dash_link">
    <div class="container-fluid cont">
        <div class="row">
            <div class="col-md-12">
                <h5><a href="#">BACK TO DASHBOARD</a></h5>
            </div>
        </div>
    </div>
</section>

<!-- Layer2-->
<section class="gift_report">
    <div class="container-fluid cont">
        <div class="row">
            <h1 class="text-center" id="report_head">GIFT REPORT</h1>
            
            <div class="container gift_marg">
                <div class="col-md-3  text-center">
                    <h1>$115</h1>
                    <p>OF $300<br>REQUESTED</p>
                </div>
                <div class="col-md-3  text-center">
                    <h1>15</h1>
                    <p>TOTAL NUMBER<br>OF GIFTS</p>
                </div>
                <div class="col-md-3  text-center">
                    <h1>$12.46</h1>
                    <p>AVERAGE AMOUNT <br>PER GIFT</p>
                </div>
                <div class="col-md-3  text-center">
                    <h1>$100</h1>
                    <p>CURRENT BALANCE<br><a>VIEW</a></p>
                </div>
            </div>
            
            <div class="row" id="report_info">
                <div class="col-md-3 text-center">
                    <h5>Tom Someone</h5>
                </div>
                <div class="col-md-3  text-center">
                    <h5>someone@something.com</h5>
                </div>
                <div class="col-md-3  text-center">
                     <h5>November 28, 2018</h5>
                </div>
                <div class="col-md-3  text-center">
                    <div class="col-md-6"><h5>$50.00 </h5></div> <div class="arrow-up"></div>
                </div>
            </div>
            
            <div class="row" id="report_tab">
                <div class="col-md-1  text-center">
                   <img src="http://fynches.codeandsilver.com/public/front/img/prof_pic.png" style="width: 50%;">
                </div>
                <div class="col-md-2  text-center">
                    <h5>Product Gift Title</h5>
                </div>
                <div class="col-md-6">
                     <div class="col-md-1">
                     <h5>Message</h5>
                     </div>
                     <div class="col-md-11">
                         <p>Happy Birthday Charlie! We can't wait to <br>celebrate your big day! We hope you love the <br>climbing lessons we gifted. </p>
                     </div>     
                </div>
                <div class="col-md-3  text-center">
                    <button class="btn btn-border yellow-submit"> SEND THANK YOU</button>
                </div>
            </div>
            
            <div class="row" id="report_trans">
                <div class="col-md-3  text-center">
                    <h5><strong>Transaction ID :</strong> f8mrcnnn</h5>
                </div>
                
                <div class="col-md-3  text-center">
                    <h5><strong>Date Posted:</strong> 11/27/2018 11:23:55 EST </h5>
                </div>
                
                <div class="col-md-6  text-center">
                    <p>Total amount listed after service fee paid. See <a href="#">FAQ's</a> for more information</p>
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


