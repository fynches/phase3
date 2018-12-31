@extends('site.gift.gift-layout')

@section('header')
    
 <header id="gift_head" data-page-id="{{$gift_page->id}}">
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
<section class="gift_experience" @if(isset($gift_page->background_image->image_url)) style="background: url('{{$gift_page->background_image->image_url}}');background-size: cover;" @endif>
	<div class="container-fluid">
	    
	    <div class="row" > 
		    <div class="col-md-12 text-left" id="pos_abs_img">
		        <div class="dropdown">
    		        <a id="Mychild_photo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{$gift_page->child->recipient_image}}" width="75px" id="prof_pic">
    		        <img src="https://fynches.codeandsilver.com/public/front/img/Upload.png" style="display:none" id="hover_pic">
    		        </a>
    		        
    		        <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#gift_crop" >UPLOAD PHOTO</a>
                      <a class="dropdown-item" href="#" id="remove_photo">REMOVE PHOTO</a>
                      <a class="dropdown-item" href="#">CANCEL</a>
                    </div>
                </div>
		    </div>
		 </div>
	    
	    
		<div class="row" >
			<div class="col-md-6 text-right" id="pos_abs">
				<button class="btn common btn-border" id="btn_wht">MAKE PAGE LIVE</button>
				<a href="/gift-page/{{$gift_page->slug}}" style="color:#000"><button class="btn common btn-border" id="btn_wht">PREVIEW GIFT PAGE</button></a>
				<button class="btn common btn-border bg" id="btn_wht" data-toggle="modal" data-target="#gift_background">EDIT BACKGROUND IMAGE</button>
			</div>
		</div>
		
	</div>
</section>


<form id="gift_form" method="post" onsubmit="event.preventDefault();">
      {{ csrf_field() }}
<!--Layer 2-->
<section class="gift_box">
    <div class="container-fluid cont_title">
         <div class="text-right" id="req"  @if(isset($gift_page)) style="visibility:hidden" @endif>Required</div>
        <div class="row">
            <div class="col-md-12 col-sm-12" id="gift_column">
                 <input type="text" id="gft_title" aria-describedby="gift_title" placeholder="Create a title for your gift page"  @if(isset($gift_page)) style="color:#000;" value="{{$gift_page->page_title}}"@endif>         
            </div> 
        </div>
        <div class="text-right" @if(isset($gift_page->page_title)) style="visibility:hidden" @endif>60 of 60 characters remaining</div>
    </div>
</section>

<!--Layer 3-->
<section class="gift_details">
    <div class="container-fluid cont">
        <div class="row">
            <input id="slug" type="hidden" value="@if(isset($gift_page->slug)){{$gift_page->slug}}@endif">
            <div class="col-md-4" id="gift_text">
                <label for="details">Details</label><div class="text-right"  @if(isset($gift_page->page_desc)) style="visibility:hidden" @endif>Required</div>
                    <textarea type="text" name="message" id="gft_det" @if(isset($gift_page->page_desc)) style="resize:none;color:#000;" value="{{$gift_page->page_desc}}" @else placeholder="Share some info about the gift recepient and events" @endif> @if(isset($gift_page->page_desc)){{$gift_page->page_desc}}@endif
                    </textarea>
                <div class="text-right"  @if(isset($gift_page->page_desc)) style="visibility:hidden" @endif>360 of 360 characters remaining</div>
            </div>
            
        
            <div class="col-md-8" id="gft_col_3">
                    <div class="row">
                        <div class="col-md-4">
                         <label>Date</label><div class="text-right"  @if(isset($gift_page)) style="visibility:hidden" @endif>Required</div>
                                <input  id="inp_date" type="date" data-date-inline-picker="false" data-date-open-on-focus="true"  @if(isset($gift_page)) value="{{$gift_page->page_date}}" style="color:#000;"@endif />
                        </div>  
                        <div class="col-md-4">
                           <label>Age</label><div class="text-right"  @if(isset($gift_page->child->age_range)) style="visibility:hidden" @endif>Required</div> 
                           <input id="inp_age" type="text" placeholder="Enter Age"  @if(isset($gift_page->child->age_range)) value="{{$gift_page->child->age_range}}" style="color:#000;"@endif>
                        </div>
                        
                        <div class="col-md-4">
                           <label>Host</label><div class="text-right" @if(isset($gift_page)) style="visibility:hidden" @endif>Required</div> 
                           <input id="inp_host" type="text" placeholder="Enter Host's Name"  @if(isset($gift_page)) value="{{$gift_page->page_hostname}}" style="color:#000;"@endif> 
                        </div>
                    </div>
                    
                    <div class="row" id="gift_share">
                        
                            <div class="col-md-9">
                                <label>Share Your custom page link</label>
                                <div class="col-md-12 chal">
                                    <div class="input-group">
                                      <input type="text" class="form-control" id="inp_link" placeholder="https://www.fynches.com/gift-page/@if(isset($gift_page->slug)){{$gift_page->slug}}@endif">
                                      <span class="input-group-btn">
                                        <a class="btn btn-default" type="button" onclick="copyURL()" data-toggle="tooltip" data-placement="top" title="Your page must be live before you copy and share your live gift share URL">COPY</a>
                                        
                                      </span>
                                    </div>
                                 </div>
                            </div>
                            
                            <div class="col-md-3" id="face">
                                <div class="col-md-6 col-xs-6">
                                    <p>SHARE ON FACEBOOK</p>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <a class="btn btn-primary" href="https://www.facebook.com/sharer/sharer.php?u=https://fynches.codeandsilver.com/gift" target="_blank">f</a>
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
        <div class="row" id="recommended">
            <h5>RECOMMENDED GIFTS FOR {{strToUpper($gift_page->child->first_name)}}</h5>
            <p id="zip_c">Recommendation based on zip code <a href="#" id="child-zip-code" data-toggle="modal" data-target="#giftZip">{{$gift_page->child->child_zipcode}}</a></p>
            @if(isset($rec_gifts))
                @foreach($rec_gifts as $gift)
                        <div class="col-md-3 reco_col" id="{{$gift->id}}">
                            <div style="position: relative; background: url({{$gift->images->image_urls}}); width:100%; height:250px; background-size:100% 100%; ">
                                <div style="position: absolute; top: 1em; left: 1em; font-weight: bold; color: #fff;">
                                    <a href="javascript:void(0)" class="favorite-button"><i class="fas fa-heart fa-2x heart-{{$gift->id}}" @if(!in_array($gift->id,unserialize($gift_page->favorites)))  style="color:#fff;" @else style="color:red;" @endif></i></a>
                                </div>
                            </div>
                            <div class="shad-effect">
                                <label>{{$gift->title}}</label>
                                <p>{{$gift->business->name}}</p>
                                <p>For Ages : {{$gift->age_range->age_range}}</p>
                               
                                <div class="btns-{{$gift->id}}">
                                @if(isset($added_gifts) && in_array($gift->id, $added_gifts_ids))
                                     <div class="row" id="marg">
                                        <div class="col-md-6 col-xs-6">
                                            <button class="btn btn-lg add_submit" data-id="{{$gift->id}}" name="remove">ADDED</button>
                                        </div>
                                        <div class="col-md-6 col-xs-6 text-right">
                                            <div class="col-md-6 col-xs-6"> <p class="text-center" style="font-weight:bold;font-size:16px;">${{$gift->price}}</p><p class="text-center" style="font-weight:100;font-size:12px;font-family:'Avenir-Book'">GIFTED</p></div>
                                            <div class="col-md-6 col-xs-6"><p class="text-center" style="font-weight:bold;font-size:16px;">$45</p><p class="text-center" style="font-weight:100;font-size:12px;font-family:'Avenir-Book'">NEEDED</p></div>
                                        </div>
                                    </div>  
                                @else
                                <div class="btns-{{$gift->id}}">
                                    <div class="row">
                                        <div id="img_1" class="col-md-6 col-xs-6">
                                            <button class="btn btn-primary btn-lg btn_purp gift-dets " id="giftdets-{{$gift->id}}" data-id="{{$gift->id}}" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
                                        </div>
                                        <div class="col-md-6 col-xs-6" id="gift_para">
                                            <p><i class="fas fa-map-marker-alt"></i>  1.1 mi</p>
                                        </div>
                                    </div>   
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <button class="btn btn-primary btn-lg yellow_submit" name="add" data-id="{{$gift->id}}">QUICK ADD</button>
                                        </div>
                                        <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                            <p style="font-weight:bold;font-size:18px;">${{$gift->price}}</p>
                                            <p>Est. Price <i class="fas fa-info-circle"></i></p>
                                        </div>
                                    </div>
                                </div>
                                @endif
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
<section class="add_gifts">
    <div class="container-fluid cont">
        <div class="row">
            <h5>ADD GIFTS</h5>
            <a href="/shop/{{$gift_page->slug}}"><div class="col-md-12 dash text-center">
                <img src="https://fynches.codeandsilver.com/public/front/img/circle_green.jpg" style="width:10%"><br><p>ADD GIFTS</p>
            </div></a>
        </div>
    </div>
</section>



<!--Layer 6-->
<section class="gift_reco">
    <div class="container-fluid cont">
        <div class="row" id="added">
            <h5 style="margin:20px;">GIFTS ADDED TO {{strToUpper($gift_page->child->first_name)}}'S PAGE</h5>
            <div class="all_gifts">
            @if(isset($added_gifts))
                @foreach($added_gifts as $gift)
                   
                        <div class="col-md-3 reco_col pointer" id="{{$gift->id}}">
                            <div id="hoverimg-{{$gift->id}}" class="hoverimg" data-id="{{$gift->id}}" style="position: relative; background: url({{$gift->images->image_urls}}); width:100%; height:250px; background-size:100% 100%; ">
                                
                                <div id="cartimg-{{$gift->id}}" class="cart_1" data-id="{{$gift->id}}"></div>
                                
                                <div class="row cancel_1"  data-id="{{$gift->id}}" id="cancel_1-{{$gift->id}}">
                                    <div class="col-md-6 text-left"></div>
                                    <div class="col-md-6 text-right">
                                        <div class="col-md-4"><img id="move-{{$gift->id}}" class="draggable" data-id="{{$gift->id}}" src="http://fynches.codeandsilver.com/public/front/img/Move_white.png" style="width:100%"></div>
                                        <div class="col-md-4"><img id="edit-{{$gift->id}}" data-id="{{$gift->id}}" src="http://fynches.codeandsilver.com/public/front/img/edit_white.png" style="width:100%"></div>
                                        <div class="col-md-4"><img id="move-{{$gift->id}}" data-id="{{$gift->id}}" src="http://fynches.codeandsilver.com/public/front/img/Delete_white.png" style="width:100%"></div>
                                    </div>
                                </div>
                                
                                <div style="position: absolute; top: 1em; left: 1em; font-weight: bold; color: #fff;">
                                    <a href="javascript:void(0)" class="favorite-button"><i class="fas fa-heart fa-2x heart-{{$gift->id}}" @if(!in_array($gift->id,unserialize($gift_page->favorites)))  style="color:#fff;" @else style="color:red;" @endif></i></a>
                                </div>
                            </div>
                            <div class="shad-effect">
                                <label>{{$gift->title}}</label>
                                <p>{{$gift->business->name}}</p>
                                
                                <div class="row" id="marg">
                                        <div class="col-md-6 col-xs-6">
                                            <button class="btn btn-lg add_submit" name="remove" data-id="{{$gift->id}}">ADDED</button>
                                        </div>
                                        <div class="col-md-6 col-xs-6 text-right">
                                            <div class="col-md-6 col-xs-6"> <p class="text-center" style="font-weight:bold;font-size:16px;">${{$gift->price}}</p><p class="text-center" style="font-weight:100;font-size:12px;font-family:'Avenir-Book'">GIFTED</p></div>
                                            <div class="col-md-6 col-xs-6"><p class="text-center" style="font-weight:bold;font-size:16px;">$45</p><p class="text-center" style="font-weight:100;font-size:12px;font-family:'Avenir-Book'">NEEDED</p></div>
                                        </div>
                                </div>  
                            </div>    
                        </div>
                @endforeach
            @else
               <div class="col-md-12 text-center added">
               <img src="https://fynches.codeandsilver.com/public/front/img/face-sad.png" style="width:5%"><br>
               <label>No Gifts Added Yet</label><br>
               <p >Only gifts you add will show up here. Recommended gifts and favourites<br> will not show up on your live gift page unless added</p>
               </div>
            @endif
            </div>
            
        </div>
    </div>
</section>


<!-- Layer 7-->
<section class="gift_reco">
    <div class="container-fluid cont">
        <div class="row" id="favorites">
            <h5 id="high">SAVED FAVOURITES <i class="fas fa-info-circle cir"></i> </h5>
            
            @if(isset($favorite_gifts))
                @foreach($favorite_gifts as $gift)
                   
                        <div class="col-md-3 reco_col pointer" id="{{$gift->id}}">
                            <div style="position: relative; background: url({{$gift->images->image_urls}}); width:100%; height:250px; background-size:100% 100%; ">
                                <div style="position: absolute; top: 1em; left: 1em; font-weight: bold; color: #fff;">
                                    <a href="javascript:void(0)" class="favorited-button"  data-pnum="{{$gift->id}}"><i class="fas fa-heart fa-2x heart-{{$gift->id}}" @if(!in_array($gift->id,unserialize($gift_page->favorites)))  style="color:#fff;" @else style="color:red;" @endif></i></a>
                                </div>
                            </div>
                            <div class="shad-effect">
                                <label>{{$gift->title}}</label>
                                <p>{{$gift->business->name}}</p>
                                <p>For Ages : {{$gift->age_range->age_range}}</p>
                                
                                <div class="btns-{{$gift->id}}">
                                @if(isset($added_gifts) && in_array($gift->id, $added_gifts_ids)) 
                                 <div class="row" id="marg">
                                        <div class="col-md-6 col-xs-6">
                                            <button class="btn btn-lg add_submit" name="remove" data-id="{{$gift->id}}">ADDED</button>
                                        </div>
                                        <div class="col-md-6 col-xs-6 text-right">
                                            <div class="col-md-6 col-xs-6"> <p class="text-center" style="font-weight:bold;font-size:16px;">${{$gift->price}}</p><p class="text-center" style="font-weight:100;font-size:12px;font-family:'Avenir-Book'">GIFTED</p></div>
                                            <div class="col-md-6 col-xs-6"><p class="text-center" style="font-weight:bold;font-size:16px;">$45</p><p class="text-center" style="font-weight:100;font-size:12px;font-family:'Avenir-Book'">NEEDED</p></div>
                                        </div>
                                    </div>  
                                @else
                                <div class="btns-{{$gift->id}}">
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
                                            <button class="btn btn-primary btn-lg yellow_submit" name="add" data-id="{{$gift->id}}">QUICK ADD</button>
                                        </div>
                                        <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                            <p style="font-weight:bold;font-size:18px;">${{$gift->price}}</p>
                                            <p>Est. Price <i class="fas fa-info-circle"></i></p>
                                        </div>
                                    </div>  
                                </div>
                                @endif  
                                </div>
                            </div>    
                        </div>
                @endforeach
            @endif
        </div>
    </div>
</section>    

@include('site.gift.gift-background')
@include('site.gift.gift_Add')
@include('site.gift.gift-zip')
@include('site.gift.gift_crop')
@include('site.gift.contact-us')

@include('site.gift.gift-modal')
    <link type="text/css" rel="stylesheet" href="{{ asset('public/asset/css/lightslider.css') }}" />                  
@stop



@section('footer')
<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="row align-items-center">
				<div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
					<a href="javascript:void(0)"><img src="https://fynches.codeandsilver.com/public/front/img/f-logo.png" alt="logo" title=""></a>
				</div>
				<div class="col-sm-6 col-md-6 col-xs-12 text-center" id="f-menu">
				    <div class="col-md-2 col-xs-2 pad"><a href="javascript:void(0)">ABOUT</a></div>
				    <div class="col-md-2 col-xs-2 pad"><a href="javascript:void(0)">BLOG</a></div>
				    <div class="col-md-3 col-xs-3 pad"><a href="#" data-toggle="modal" data-target="#contactPage">CONTACT US</a></div>
				    <div class="col-md-2 col-xs-2 pad"><a href="javascript:void(0)">FAQS</a></div>
				    <div class="col-md-3 col-xs-3 pad"><a href="javascript:void(0)">FIND A GIFT PAGE</a></div>
				</div>
				<div class="col-sm-3 col-md-3 col-xs-12  home">
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
				<div class="col-md-6 col-sm-6">
					<p>&copy; 2019 Fynches. All rights reserved</p>
				</div>
				<div class="col-md-6 col-sm-6">
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
