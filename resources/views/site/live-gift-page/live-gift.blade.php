@extends('site.live-gift-page.live-page-layout')

@section('header')
    
 <header id="gift_head" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 fheader">
                   <a class="navbar-brand" href="http://fynches.codeandsilver.com">
        	             <img src="http://fynches.codeandsilver.com/public/front/img/logo.png" alt="Fynches" title="" id="fyn_logo">
        	        </a>
                </div>
 <div class="col-md- fmenu">
    <div id="div_top_hypers">
         <ul class="ul_top_hypers" id="ul_top_hypers">
                  <li><a href="" class="a_top_hypers"> HELP</a></li>
                       <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MY ACCOUNT <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                        <li><a href="/account">ACCOUNT SETTINGS</a></li>
                        <li><a href="/gift-dashboard">DASHBOARD</a></li>
                        <li><a href="{{ url('/logout') }}">LOGOUT</a></li>
                        </ul>
                    </li>
              </div>
         </ul>
</div>
             </div>
        </div>
    </div>    
</header>
@stop

@section('live_content')
<!--Layer 1-->
<section class="live_experience" @if(isset($gift_page->background_image->image_url)) style="background: url('{{$gift_page->background_image->image_url}}');background-size: cover;" @endif>
	<div class="container-fluid">
	    
	    <div class="row" > 
		    <div class="col-md-12 text-left" id="child_col">
		        <div class="dropdown" id="my_child">
    		        <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img  src="{{$child_image}}"></a>
                </div>
		    </div>
		 </div>
	</div>
</section>


<form id="gift_form" method="post" onsubmit="event.preventDefault();">
      {{ csrf_field() }}
<!--Layer 2-->
<section class="live_box">
    <div class="container-fluid cont_title">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" id="live_column">
                 <h5 id="ctitle">@isset($gift_page->page_title){{$gift_page->page_title}}@endisset</h5>    
            </div> 
        </div>
    </div>
</section>

<!--Layer 3-->
<section class="live_details">
    <div class="container-fluid cont">
        <div class="row">
            
            <div class="col-md-4 col-sm-4 col-xs-12" id="live_text">
                <label for="details">Details</label>
                   <p>@isset($gift_page->page_desc){{$gift_page->page_desc}}@endisset</p>
            </div>
            
        
            <div class="col-md-8 col-sm-8 col-xs-12" id="live_col_2">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <label>Name</label>
                        <h5><strong>@isset($child_info->first_name){{$child_info->first_name}}@endisset</strong></h5>
                        <input id="page-id" type="hidden" value="@isset($gift_page->id){{$gift_page->id}}@endisset">
                    </div>  
                    
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <label>Age</label>
                        <h5><strong>@isset($child_info->age_range){{$child_info->age_range}}@endisset</strong></h5>
                    </div>
                        
                    <div class="col-md-2 col-sm-2 col-xs-6">
                        <label>Host</label>
                         <h5><strong>@isset($gift_page->page_hostname){{$gift_page->page_hostname}}@endisset</strong></h5>
                    </div>
                        
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <label>Date</label>
                        <h5><strong>@isset($gift_page->page_date){{date('F m,Y',strtotime($gift_page->page_date))}}@endisset</strong></h5>
                       
                    </div>
                    
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <p>Share</p>
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-2">
                                <i class="fab fa-twitter"></i>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-2">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-2">
                               <i class="fab fa-instagram"></i>
                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-2">
                               <i class="far fa-envelope" data-toggle="modal" data-target="#gift_share"></i>
                            </div>
                        </div>
                        
                    </div>
                        
                </div>
            </div>  
        </div>
    </div>
</section> 

</form>


<!--Layer 4-->
<section class="gift_reco">
    <div class="container-fluid cont">
        <div class="row">
            @if(isset($added_gifts))
                @foreach($added_gifts as $gift)
                         <div class="col-md-3 reco_col" id="reco_col">
                            <div id="gift-image-{{$gift->id}}" class="add-money" data-id="{{$gift->id}}" style="background:url('{{$gift->images->image_urls}}');background-size:cover">
                            <img src="{{$gift->images->image_urls}}" width="100%" id="img-{{$gift->id}}">
                            
                            <img id="imgrp-{{$gift->id}}" class="cart" data-id="{{$gift->id}}" src="http://fynches.codeandsilver.com/public/front/img/circle-check-128.png">
                            <img  id="fagift-{{$gift->id}}" class="gifted_icon" data-id="{{$gift->id}}" src="http://fynches.codeandsilver.com/public/front/img/Gifted.png">
                            
                            <p class="cancel" data-id="{{$gift->id}}" id="para-{{$gift->id}}"><i class="fas fa-times-circle"></i> Cancel</p>
                            
                            </div>
                            <div class="shad-effect">
                                <label>{{$gift->title}}</label>
                                <p style="font-weight:100">{{$gift->business->name}}</p>
                                    <div class="row gift_giving text-center four-columns">
                                        <div class="col-md-3 col-xs-6">
                                            @php 
                                            $sum = $gift->needed($gift_page->id)->sum('amount');
                                            $gifted = number_format((float)$sum, 2, '.', '');  
                                            @endphp
                                            <h6><strong>$<span id="gifted-{{$gift->id}}" data-result="" data-amount="{{$gifted}}">{{$gifted}}</span></strong></h6>
                                            <p style="font-weight:100">GIFTED</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6">
                                            @php 
                                            $sums = $gift->price - $gift->needed($gift_page->id)->sum('amount');
                                            $needed = number_format((float)$sums, 2, '.', '');  
                                            @endphp
                                            <h6><strong>$<span  id="needed-{{$gift->id}}" data-result="" data-amount="{{$needed}}">{{$needed}}</span></strong></h6>
                                            <p style="font-weight:100 ">NEEDED</p>
                                        </div>
                                        <div class="col-md-6  gift-item">
                                            <a id="gft-{{$gift->id}}" data-id="{{$gift->id}}" href="{{url('checkout')}}" class="btn btn-border yellow-submit give-gift"> GIVE THIS GIFT</a>
                                            <span id="dlr-{{$gift->id}}" class="currencyinput" style="display:none;">$</span>
                                            <input id="prch-{{$gift->id}}" class="purchase" data-id="{{$gift->id}}" type="number" value="" placeholder="Enter Amount" style="display:none;" min="0" max="{{$gift->price - 0}}"/>
                                        </div>
                                    </div>   
          
                            </div>    
                        </div>
                @endforeach
            @endif
            </div>
        </div>
    </div>
</section>
<!--Layer 5-->
<section class="live_messages">
    @if(isset($child_info->message))
    <p id="titlemessage" class="text-center">MESSAGES FROM FRIENDS AND FAMILY</p>
    <div class="container" id="messages">
        
        @foreach($child_info->message as $message)
           @php 
           $datetime = $message->created_at;
           $full = false;
                    $now = new DateTime;
                    $ago = new DateTime($datetime);
                    $diff = $now->diff($ago);
                    $diff->w = floor($diff->d / 7);
                    $diff->d -= $diff->w * 7;
                    
                    $string = array(
                    'y' => 'year',
                    'm' => 'month',
                    'w' => 'week',
                    'd' => 'day',
                    'h' => 'hour',
                    'i' => 'minute',
                    's' => 'second',
                    );
                    foreach ($string as $k => &$v ) {
                    if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                    } else {
                    unset($string[$k]);
                    }
                    }
                    
                    if (!$full) $string = array_slice($string, 0, 1);
                    $ago =  $string ? implode(', ', $string) . ' ago' : 'just now';
              @endphp
        <div class="row" id="msg">
             
            <div class="col-md-1 col-sm-2 col-xs-4">
                <img  id="photoIcon" src="{{$child_image}}" style="width:100%">
            </div>
           
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="row">
                    <div class="col-md-2 col-xs-2">
                        <h5><strong>{{$message->name}}</strong></h5>
                    </div>
                    <div class="col-md-10 col-xs-10">
                        
                        <p style="color:#d9d9d9;margin: 5px 0 0 0;"><i class="far fa-clock"></i>{{$ago}}</p>
                        
                    </div>
                </div>    
                
                <div class="row">
                    <div class="col-md-12 col-xs-12" >
                        <p class="small_msg">{{$message->message}}</p>
                    </div>
                </div>
                
            </div>
            
        </div>
        @endforeach
    </div>
    @endif
</section>

<section class="live_textbox">
    <div class="container">
        <form id="message-form" method="POST" action="/gift-live/{{$child_info->first_name}}">
            <input id="childs_name" type="hidden" name="childs_name" value="{{$child_info->first_name}}">
            <div class="row" id="msg">
            <div class="col-md-12">
            </div>
            <div class="col-md-1 col-xs-4">
                <img src="{{$child_image}}" style="width:100%">
            </div>
            <div class="col-md-11 col-xs-11">
                 <label id="inputName" for="message_name">Name:</label>
                 <input id="live_textname" placeholder="Enter Name" type="text" name="message_name"><br>
                 <label for="message">Message:</label>
               <textarea type="text" name="message" id="live_textmsg" placeholder="Write a message to {{$child_info->first_name}}"></textarea>
            </div>
        </div>
        <div class="row text-right">
             <button class="btn btn-lg btn_blk" id="post_message">Post Message</button>
        </div>
       </form>
    </div>
</section>

<section>
    <div id="checkout" class="container-fluid checkout-wrap" style="display:none;">
        <div id="cart"><span id="total-text">TOTAL $</span><span id="total">0</span><a href="/checkout">
        <button class="btn common btn-border white-border" id="post_message" style="margin-left: 22px;">CONTINUE TO CHECKOUT</button></a></div>
    </div>    
</section>

@include('site.live-gift-page.gift_share')

@stop

@section('footer')
<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="row align-items-center">
				<div id="footer_header" class="col-sm-12 col-md-3 col-lg-3">
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
				<div  id="icon" class="col-sm-12 col-md-3 col-lg-3 text-right home">
					<ul class="social">
						<li><a href="https://twitter.com/fynches" target="blank"><i class="fab fa-twitter"></i></a></li>
						<li><a target="_blank" href="https://www.facebook.com/usefynches/"><i class="fab fa-facebook-f"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/fynches/"><i class="fab fa-instagram"></i></a></li>
						<li><a target="_blank" href="https://www.pinterest.com/usefynches/"><i class="fab fa-pinterest-p"></i></a></li>
					</ul> 
				</div>
			</div>
		</div>
		<div class="footer-btm home-btm">
			<div class="row align-items-center">
				<div id="rights" class="col-md-7 col-lg-7">
					<p>&copy; 2019 Fynches. All rights reserved</p>
				</div>
				<div class="col-md-5 col-lg-5 text-right">
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