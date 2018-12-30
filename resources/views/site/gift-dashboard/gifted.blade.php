@extends('site.gift-dashboard.gift-info')
@section('header')
     <header id="gift-dash">
        <div class="container-fluid">
           <div class="row">
                <div class="fheader col-md-8 col-sm-7">
                   <a class="navbar-brand" href="https://fynches.codeandsilver.com">
        	         <img src="https://fynches.codeandsilver.com/public/front/img/logo.png" alt="Fynches" title="" id="fyn_logo">
        	        </a>
                </div>
    <div class="col-md-4">
        <div class="fmenu"id="div_top_hypers">
            <ul class="ul_top_hypers" id="ul_top_hypers">
                 <li><a href="" class="a_top_hypers">HELP</a></li>
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

@section('content')
<div class="container-fluid gift-dashboard">
    <div class="row" style="margin-top:50px;">
        <div class="col-md-2">
            <ul class="dashboard-list">
                <h4>DASHBOARD</h4>
                <li><a href="/gift-dashboard">Gift Pages</a></li>
                <li><a href="/gifted">Gifted</a></li>
            </ul>
        </div>
        <div class="col-md-9 dashboard-items">
            <div class="row">
                <h3>GIFTED</h3>
                <a href="/parent-child-info" style="color:#fff;margin-left:auto" class="pointer"><button class="create-gift" style="margin-left:auto;">CREATE GIFT PAGE</button></a>
            </div>
            <div class="row" style="margin-top:20px;">
                <h5 style="height:50px; overflow: hidden;"><strong>Recent Gifts</strong>   ------------------------------------------------------------------------------------------------------------------------------</h5>
            </div>
            @if(isset($purchases))
                @foreach($purchases as $gift)
                <div class="marg-dash">
                    <div class="row" style="margin-top:20px;">
                    <div class="col-md-2 media">
                        <span class="media-left">
                            <img src="{{$gift->child->recipient_image}}" width="100" alt="Image Here">
                        </span>
                    </div>    
                    <div class="col-md-10 media-body">
                            <h4>{{$gift->gift->title}}</h4>
                            <p>{{$gift->gift->description}}</p>
                    </div>
                </div>
                    <div class="row" style="margin-top:30px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <p class="gifted_right">Gifted To: {{$gift->child->first_name}}</p> 
                    </div>
                    <div class="col-md-4">
                        <p>Gifted ${{$gift->amount}} of ${{$gift->gift->price}} Requested</p>
                    </div>
                    <div class="col-md-3">
                        @php 
                        $stime = strtotime($gift->created_at);
                        $date = date('m/d/Y', $stime);
                        @endphp
                        <p class="gifted_too_left">Gifted On: @isset($date){{$date}}@endisset</p>
                    </div>
                </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
 
@section('footer')
<footer class="footer" style="margin-top:10%;">
	<div class="container">
		<div class="footer-top">
			<div class="row">
				<div id="footer_header" class="fheader col-sm-12 col-md-3 col-lg-3">
					<a href="javascript:void(0)"><img src="http://fynches.codeandsilver.com/public/front/img/f-logo.png" alt="logo" title=""></a>
				</div>
				<div class="col-sm-12 col-md-5 col-lg-6 text-center">
					<ul class="f-menu">
						<li><a href="javascript:void(0)">ABOUT</a></li>
						<li><a href="javascript:void(0)">BLOG</a></li>
						<li><a href="javascript:void(0)">CONTACT US</a></li>
						<li><a href="javascript:void(0)">FAQS</a></li>
						<li><a href="javascript:void(0)">FIND A GIFT PAGE</a></li>
					</ul>
				</div>
				<div  id="icon" class="fheader col-sm-12 col-md-4 col-lg-3 text-right home">
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
			<div class="row">
				<div id="rights" class="fheader col-md-7 col-lg-7">
					<p>&copy; 2019 Fynches. All rights reserved</p>
				</div>
				<div class="fheader col-md-5 col-lg-5 text-right">
					<ul  id="terms" >
						<li><a href="javascript:void(0)">Privacy Policy</a></li>
						<li><a href="javascript:void(0)">Terms and Conditions</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
@stop
