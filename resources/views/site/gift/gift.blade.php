@extends('site.gift.gift-layout')

@section('header')
    
 <header id="gift_head">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                   <a class="navbar-brand" href="http://fynches.codeandsilver.com">
        	         <img src="http://fynches.codeandsilver.com/public/front/img/logo.png" alt="Fynches" title="" id="fyn_logo">
        	        </a>
                </div>
                <div class="col-md-4">
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

@section('gift_content')
<!--Layer 1-->
<section class="gift_experience">
	<div class="container-fluid">
	    
	    <div class="row" > 
		    <div class="col-md-12 text-left" id="pos_abs_img">
		        <div class="dropdown">
    		        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://fynches.codeandsilver.com/public/front/img/prof_pic.png"></a>
    		        
    		        <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">UPLOAD PHOTO</a>
                      <a class="dropdown-item" href="#">REMOVE PHOTO</a>
                      <a class="dropdown-item" href="#">CANCEL</a>
                    </div>
                </div>
		    </div>
		 </div>
	    
	    
		<div class="row" >
			<div class="col-md-6 text-right" id="pos_abs">
				<button class="btn common btn-border" id="btn_wht">MAKE PAGE LIVE</button>
				<button class="btn common btn-border" id="btn_wht">PREVIEW GIFT PAGE</button>
				<button class="btn common btn-border" id="btn_wht" data-toggle="modal" data-target="#gift_background">EDIT BACKGROUND IMAGE</button>
			</div>
		</div>
		
	</div>
</section>

<!--Layer 2-->
<section class="gift_box">
    <div class="container-fluid cont_title">
         <div class="text-right" id="req">Required</div>
        <div class="row">
            <div class="col-md-12" id="gift_column">
                 <input type="text" id="gft_title" aria-describedby="gift_title" placeholder="Create a title for your gift page">         
            </div> 
        </div>
        <div class="text-right">60 of 60 characters remaining</div>
    </div>
</section>

<!--Layer 3-->
<section class="gift_details">
    <div class="container-fluid cont">
        <div class="row">
            
            <div class="col-md-4" id="gift_text">
                <label for="details">Details</label><div class="text-right">Required</div>
                    <textarea name="message" id="gft_det" placeholder="Share some info about the gift recepient and events"></textarea>
                <div class="text-right">360 of 360 characters remaining</div>
            </div>
            
        
            <div class="col-md-8" id="gft_col_3">
                    <div class="row">
                        <div class="col-md-4">
                         <label>Date</label><div class="text-right">Required</div>
                                <input id="gift_inp" type="date" data-date-inline-picker="false" data-date-open-on-focus="true" />
                        </div>  
                        <div class="col-md-4">
                           <label>Age</label><div class="text-right">Required</div> 
                           <input id="gift_inp" type="text" placeholder="Enter Age">
                        </div>
                        
                        <div class="col-md-4">
                           <label>Host</label><div class="text-right">Required</div> 
                           <input id="gift_inp" type="text" placeholder="Enter Host's Name"> 
                        </div>
                    </div>
                    
                    <div class="row" id="gift_share">
                        
                            <div class="col-md-9">
                                <label>Share Your custom page link</label>
                                <div class="col-md-12 chal">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="https://www.fynches.com/gift-page/charlie">
                                      <span class="input-group-btn">
                                        <a class="btn btn-default" type="button" data-toggle="tooltip" data-placement="top" title="Your page must be live before you copy and share your live gift share URL">COPY</a>
                                        
                                      </span>
                                    </div>
                                 </div>
                            </div>
                            
                            <div class="col-md-3" id="face">
                                <div class="col-md-6 col-xs-6">
                                    <p>SHARE ON FACEBOOK</p>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <button class="btn btn-primary" type="button">f</button>
                                </div>
                            </div>    
                    </div>
            </div>  
        </div>
    </div>
</section> 

<!--Layer 4-->
<section class="gift_reco">
    <div class="container-fluid cont">
        <div class="row">
            <h5>RECOMMENDED GIFTS FOR CHARLIE</h5>
            <p id="zip_c">Recommendation based on zip code <a href="#">94217</a></p>
            <div class="col-md-3" id="reco_col">
                <img  src="http://fynches.codeandsilver.com/public/front/img/reco_1.png" style="width:100%" >
                <div class="shad-effect">
                    <label>Gift Title</label>
                    <p>Business Name</p>
                    <p>For Ages : Ages</p>
                        <div class="row">
                            <div id="img_1" class="col-md-6 col-xs-6">
                                <button class="btn btn-primary btn-lg btn_purp" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
                            </div>
                            <div class="col-md-6 col-xs-6" id="gift_para">
                                <p><i class="fas fa-map-marker-alt"></i>  1.1 MIL</p>
                            </div>
                        </div>   
                        
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <button class="btn btn-primary btn-lg yellow_submit" data-toggle="modal" data-target="#gift_Add">QIUCK ADD</button>
                            </div>
                            <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                <p style="font-weight:bold;font-size:18px;">$25.00</p>
                                <p>Est. Price <i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>  
                    </div>    
            </div>
            
            
            <div class="col-md-3"  id="reco_col">
                <img src="http://fynches.codeandsilver.com/public/front/img/reco_2.png" style="width:100%" data-toggle="modal">
                <div class="shad-effect">
                    <label>Gift Title</label>
                    <p>Business Name</p>
                    <p>For Ages : Ages</p>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <button class="btn btn-primary btn-lg btn_purp" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
                            </div>
                            <div class="col-md-6 col-xs-6 " id="gift_para">
                                <p><i class="fas fa-map-marker-alt"></i>  1.1 MIL</p>
                            </div>
                        </div>   
                        
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <button class="btn btn-primary btn-lg yellow_submit" data-toggle="modal" data-target="#gift_Add">QIUCK ADD</button>
                            </div>
                            <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                <p style="font-weight:bold ;font-size:18px;">$25.00</p>
                                <p>Est. Price <i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>  
                </div>
            </div>
            
            
            <div class="col-md-3"  id="reco_col">
                <img src="http://fynches.codeandsilver.com/public/front/img/reco_3.png" style="width:100%">
                <div class="shad-effect">
                <label>1 Month Youth Membership</label>
                <p>Business Name</p>
                <p>For Ages : Ages</p>
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <button class="btn btn-primary btn-lg btn_purp" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
                        </div>
                        <div class="col-md-6 col-xs-6" id="gift_para">
                            <p><i class="fas fa-map-marker-alt"></i>  1.1 MIL</p>
                        </div>
                    </div>   
                    
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <button class="btn btn-primary btn-lg yellow_submit" data-toggle="modal" data-target="#gift_Add">QIUCK ADD</button>
                        </div>
                        <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                            <p style="font-weight:bold;font-size:18px;">$25.00</p>
                            <p>Est. Price <i class="fas fa-info-circle"></i></p>
                        </div>
                    </div>    
                 </div> 
            </div>
            
            
            <div class="col-md-3"  id="reco_col">
                <img src="http://fynches.codeandsilver.com/public/front/img/reco_4.png" style="width:100%" data-toggle="modal" data-target="#myModal">
                <div class="shad-effect">
                <label>Gift Title</label>
                <p>Business Name</p>
                <p>For Ages : Ages</p>
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <button class="btn btn-primary btn-lg btn_purp" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
                        </div>
                        <div class="col-md-6 col-xs-6" id="gift_para">
                            <p><i class="fas fa-map-marker-alt"></i>  1.1 MIL</p>
                        </div>
                    </div>   
                    
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <button class="btn btn-primary btn-lg yellow_submit" data-toggle="modal" data-target="#gift_Add" >QIUCK ADD</button>
                        </div>
                        <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                            <p style="font-weight:bold;font-size:18px;">$25.00</p>
                            <p>Est. Price <i class="fas fa-info-circle"></i></p>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>    

<!--Layer 5-->
<section class="add_gifts">
    <div class="container-fluid cont">
        <div class="row">
            <h5>ADD GIFTS</h5>
            <div class="col-md-12 dash text-center">
                <img src="http://fynches.codeandsilver.com/public/front/img/circle_green.jpg" style="width:10%"><br><p>ADD GIFTS</p>
            </div>
        </div>
    </div>
</section>



<!--Layer 6-->
<section class="added_gifts">
    <div class="container-fluid cont">
        <div class="row">
            <h5>GIFTS ADDED TO CHARLIE'S PAGE</h5>
            <div class="col-md-12 text-center added">
               <img src="http://fynches.codeandsilver.com/public/front/img/face-sad.png" style="width:5%"><br>
               <label>No Gifts Added Yet</label><br>
               <p >Only gifts you add will show up here. Recommended gifts and favourites<br> will not show up on your live gift page unless added</p>
            </div>
        </div>
    </div>
</section>


<!-- Layer 7-->
<section class="gift_reco">
    <div class="container-fluid cont">
        <div class="row">
            <h5 id="high">SAVED FAVOURITES <i class="fas fa-info-circle cir"></i> </h5>
            <div class="col-md-3 pointer" id="reco_col">
                <img id="img_1" src="http://fynches.codeandsilver.com/public/front/img/reco_1.png" style="width:100%" >
                <div class="shad-effect">
                    <label>Gift Title</label>
                    <p>Business Name</p>
                    <p>For Ages : Ages</p>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <button class="btn btn-primary btn-lg btn_purp" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
                            </div>
                            <div class="col-md-6 col-xs-6" id="gift_para">
                                <p><i class="fas fa-map-marker-alt"></i>  1.1 MIL</p>
                            </div>
                        </div>   
                        
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <button class="btn btn-primary btn-lg yellow_submit" data-toggle="modal" data-target="#gift_Add">QIUCK ADD</button>
                            </div>
                            <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                <p style="font-weight:bold;font-size:18px;">$25.00</p>
                                <p>Est. Price <i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>  
                    </div>    
            </div>
            
            
            <div class="col-md-3 pointer"  id="reco_col">
                <img src="http://fynches.codeandsilver.com/public/front/img/reco_2.png" style="width:100%" data-toggle="modal" data-target="#myModal">
                <div class="shad-effect">
                    <label>Gift Title</label>
                    <p>Business Name</p>
                    <p>For Ages : Ages</p>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <button class="btn btn-primary btn-lg btn_purp" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
                            </div>
                            <div class="col-md-6 col-xs-6 " id="gift_para">
                                <p><i class="fas fa-map-marker-alt"></i>  1.1 MIL</p>
                            </div>
                        </div>   
                        
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <button class="btn btn-primary btn-lg yellow_submit" data-toggle="modal" data-target="#gift_Add">QIUCK ADD</button>
                            </div>
                            <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                <p style="font-weight:bold ;font-size:18px;">$25.00</p>
                                <p>Est. Price <i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>  
                </div>
            </div>
            
            
            <div class="col-md-3 pointer"  id="reco_col">
                <img src="http://fynches.codeandsilver.com/public/front/img/reco_3.png" style="width:100%" data-toggle="modal" data-target="#myModal">
                <div class="shad-effect">
                <label>1 Month Youth Membership</label>
                <p>Business Name</p>
                <p>For Ages : Ages</p>
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <button class="btn btn-primary btn-lg btn_purp" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
                        </div>
                        <div class="col-md-6 col-xs-6" id="gift_para">
                            <p><i class="fas fa-map-marker-alt"></i>  1.1 MIL</p>
                        </div>
                    </div>   
                    
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <button class="btn btn-primary btn-lg yellow_submit" data-toggle="modal" data-target="#gift_Add">QIUCK ADD</button>
                        </div>
                        <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                            <p style="font-weight:bold;font-size:18px;">$25.00</p>
                            <p>Est. Price <i class="fas fa-info-circle"></i></p>
                        </div>
                    </div>    
                 </div> 
            </div>
            
            
            <div class="col-md-3 pointer"  id="reco_col">
                <img src="http://fynches.codeandsilver.com/public/front/img/reco_4.png" style="width:100%" data-toggle="modal" data-target="#myModal">
                <div class="shad-effect">
                <label>Gift Title</label>
                <p>Business Name</p>
                <p>For Ages : Ages</p>
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <button class="btn btn-primary btn-lg btn_purp" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
                        </div>
                        <div class="col-md-6 col-xs-6" id="gift_para">
                            <p><i class="fas fa-map-marker-alt"></i>  1.1 MIL</p>
                        </div>
                    </div>   
                    
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <button class="btn btn-primary btn-lg yellow_submit" data-toggle="modal" data-target="#gift_Add">QIUCK ADD</button>
                        </div>
                        <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                            <p style="font-weight:bold;font-size:18px;">$25.00</p>
                            <p>Est. Price <i class="fas fa-info-circle"></i></p>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>    

@include('site.gift.gift-background')
@include('site.gift.gift_Add')

@include('site.gift.gift-modal')
    <link type="text/css" rel="stylesheet" href="{{ asset('public/asset/css/lightslider.css') }}" />                  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('public/js/lightslider.js') }}"></script>
<script>
   $(document).ready(function($) {
      $("#lightSlider").lightSlider({
          gallery:true,
          controls:false,
          enableDrag:false,
          item:1
      });
      
   });
   
   function gifttext() {
       return "You will receive the cash equivalent of this gift amount when the gift is purchased from your gift page.";
   }
</script>
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


