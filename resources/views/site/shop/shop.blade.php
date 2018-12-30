@extends('site.shop.shop-layout')

@section('header')
    <header id="shop_head">
        <div class="container-fluid cont">
            <div class="row">
                <div class="fheader col-md-8">
                    <a class="navbar-brand" href="https://fynches.codeandsilver.com">
        	         <img src="https://fynches.codeandsilver.com/public/front/img/logo.png" alt="Fynches" title="" id="fyn_logo">
        	        </a>
                </div>
                <div class="fheader col-md-4" id="shop_list">
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


</div>
    </ul>
</div>
                </div>
            </div>
        </div>    
    </header>
    
@stop 

@section('shop_content')
<!-- Layer1 -->
<section class="shop_btns">
    <div class="container-fluid cont">
        <div class="row">
            <div class="col-md-12 text-right">
                <button class="btn common btn-border" id="btn_blk" data-toggle="modal" data-target="#gift_Add">CREATE CUSTOM GIFT</button>
				<a href="/gift-page/{{$gift_page->slug}}"><button class="btn common btn-border" id="btn_blk">PREVIEW GIFT PAGE</button><a/>
				<a href="/gift/{{$gift_page->slug}}"><button class="btn common btn-border" id="btn_blk">MANAGE GIFT PAGE</button><a/>
            </div>
        </div>
    </div>
</section>

<!-- Layer2 -->
<section class="shop_experience">
	<div class="container-fluid cont">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="shop_title" font-size="2em">This is a Promotional Banner</h2>
				<h5>1136 X 304 PX</h5>
				<p>Could be info about adding gifts,featured<br> vendor or product, or a paid ad </p>
			</div>
		</div>
	</div>
</section>

<!-- Layer3 -->
<section class="shop_sort">
    <div class="container-fluid cont">
        <div class="row">
            <div class="col-md-12 text-right">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">SORT BY :
                    <span class="caret"></span></button>
                        <ul class="dropdown-menu" id="shop_drop">
                          <li><a href="#">FEATURED</a></li>
                          <li><a href="#">PRICE: LOW TO HIGH</a></li>
                          <li><a href="#">PRICE: HIGH TO LOW</a></li>
                        </ul>
                </div>
            </div>
        </div>    
    </div>
</section>

<!-- Layer4 -->
<section id="shop_cat">
    <div class="container-fluid cont">
        <div class="row">
            <div class="col-md-2">
                <h5>CATEGORY</h5>
                <ul>
                    <li><div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                        <input type="checkbox" class="checkbox" data-id="category" id="music"/>
                        <div class="state">
                            <i class="icon mdi mdi-check"></i>
                            <label>Music</label>
                        </div>
                        <div class="state p-is-indeterminate">
                            <i class="icon mdi mdi-minus"></i>
                            <label>Indeterminate</label>
                        </div>
                    </div>
                    </li>
                    
                    <li>
                    <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                        <input type="checkbox" class="checkbox" data-id="category" id="nature"/>
                        <div class="state">
                            <i class="icon mdi mdi-check"></i>
                            <label>Nature</label>
                        </div>
                        <div class="state p-is-indeterminate">
                            <i class="icon mdi mdi-minus"></i>
                            <label>Indeterminate</label>
                        </div>
                    </div>
                    </li>
                    
                    <li>
                    <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                        <input type="checkbox" class="checkbox" data-id="category" id="science"/>
                        <div class="state">
                            <i class="icon mdi mdi-check"></i>
                            <label>Science</label>
                        </div>
                        <div class="state p-is-indeterminate">
                            <i class="icon mdi mdi-minus"></i>
                            <label>Indeterminate</label>
                        </div>
                    </div>
                    </li>
                    
                    <li>
                    <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                        <input type="checkbox" class="checkbox" data-id="category" id="sports"/>
                        <div class="state">
                            <i class="icon mdi mdi-check"></i>
                            <label>Sports</label>
                        </div>
                        <div class="state p-is-indeterminate">
                            <i class="icon mdi mdi-minus"></i>
                            <label>Indeterminate</label>
                        </div>
                    </div>
                    </li>
                    
                    <li>
                    <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                        <input type="checkbox" class="checkbox" data-id="category" id="cooking"/>
                        <div class="state">
                            <i class="icon mdi mdi-check"></i>
                            <label>Cooking</label>
                        </div>
                        <div class="state p-is-indeterminate">
                            <i class="icon mdi mdi-minus"></i>
                            <label>Indeterminate</label>
                        </div>
                    </div>
                    </li>
                </ul>
                
                <h5>AGES</h5>
                <ul>
                    <li>
                        <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                            <input type="checkbox" class="checkbox" data-id="age" id="1"/>
                            <div class="state">
                                <i class="icon mdi mdi-check"></i>
                                <label>0 - 2 YRS</label>
                            </div>
                            <div class="state p-is-indeterminate">
                                <i class="icon mdi mdi-minus"></i>
                                <label>Indeterminate</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                            <input type="checkbox" class="checkbox" data-id="age" id="2"/>
                            <div class="state">
                                <i class="icon mdi mdi-check"></i>
                                <label>2 - 5 YRS</label>
                            </div>
                            <div class="state p-is-indeterminate">
                                <i class="icon mdi mdi-minus"></i>
                                <label>Indeterminate</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                            <input type="checkbox" class="checkbox" data-id="age" id="3"/>
                            <div class="state">
                                <i class="icon mdi mdi-check"></i>
                                <label>5 - 8 YRS</label>
                            </div>
                            <div class="state p-is-indeterminate">
                                <i class="icon mdi mdi-minus"></i>
                                <label>Indeterminate</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                            <input type="checkbox" class="checkbox" data-id="age" id="4"/>
                            <div class="state">
                                <i class="icon mdi mdi-check"></i>
                                <label>8 - 13 YRS</label>
                            </div>
                            <div class="state p-is-indeterminate">
                                <i class="icon mdi mdi-minus"></i>
                                <label>Indeterminate</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                            <input type="checkbox" class="checkbox" data-id="age" id="5"/>
                            <div class="state">
                                <i class="icon mdi mdi-check"></i>
                                <label>13+ TRS</label>
                            </div>
                            <div class="state p-is-indeterminate">
                                <i class="icon mdi mdi-minus"></i>
                                <label>Indeterminate</label>
                            </div>
                        </div>
                    </li>
                </ul>
                
                <h5>LOCATION</h5>
                <ul>
                    <li>
                        <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                            <input type="checkbox" class="checkbox" data-id="miles" id="1"/>
                            <div class="state">
                                <i class="icon mdi mdi-check"></i>
                                <label> < 1 Miles</label>
                            </div>
                            <div class="state p-is-indeterminate">
                                <i class="icon mdi mdi-minus"></i>
                                <label>Indeterminate</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                            <input type="checkbox" class="checkbox" data-id="miles" id="2"/>
                            <div class="state">
                                <i class="icon mdi mdi-check"></i>
                                <label> 1 - 5 Miles </label>
                            </div>
                            <div class="state p-is-indeterminate">
                                <i class="icon mdi mdi-minus"></i>
                                <label>Indeterminate</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                            <input type="checkbox" class="checkbox" data-id="miles" id="3"/>
                            <div class="state">
                                <i class="icon mdi mdi-check"></i>
                                <label> 5 - 10 Miles </label>
                            </div>
                            <div class="state p-is-indeterminate">
                                <i class="icon mdi mdi-minus"></i>
                                <label>Indeterminate</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="pretty p-icon p-curve p-fill p-has-indeterminate">
                            <input type="checkbox" class="checkbox" data-id="miles" id="4"/>
                            <div class="state">
                                <i class="icon mdi mdi-check"></i>
                                <label> > 10 Miles</label>
                            </div>
                            <div class="state p-is-indeterminate">
                                <i class="icon mdi mdi-minus"></i>
                                <label>Indeterminate</label>
                            </div>
                        </div>
                    </li>
                </ul>
                
                <h6> SEARCH ZIP CODE</h6>
                <input type="text" class="form-control" id="zip_code" name="zip_code" value="">
            </div>
            
            
            <div class="col-md-10">
                <div class="row" id="shop-items">
                @if(isset($gifts))
                    @foreach($gifts as $gift)
                        <div class="col-md-4 reco_col" id="{{$gift->id}}" style="margin-bottom:20px">
                            <div style="position: relative; background: url({{$gift->images->image_urls}}); height:250px;background-size:100% 100%; ">
                                <div style="position: absolute; top: 1em; left: 1em; font-weight: bold; color: #fff;">
                                    <a href="javascript:void(0)" class="favorite-button"@if(!in_array($gift->id,unserialize($gift_page->favorites)))  style="color:#fff;" @else style="color:red;" @endif class="unfavorite-button"><i class="fas fa-heart fa-2x"></i></a>
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
                                    <div class="row" id="marg">
                                        <div class="col-md-6 col-xs-6">
                                            <button class="btn btn-primary btn-lg btn_purp gift-dets" id="giftdets-{{$gift->id}}" data-id="{{$gift->id}}" data-toggle="modal" data-target="#myModal">GIFT DETAILS</button>
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
        </div>
    </div>
</section>
@include('site.gift.gift-modal')
@include('site.gift.gift_Add')
@stop

@section('footer')
<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="row align-items-center">
				<div class="fheader col-sm-12 col-md-3 col-lg-3">
					<a href="javascript:void(0)"><img src="https://fynches.codeandsilver.com/public/front/img/f-logo.png" alt="logo" title=""></a>
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
				<div class="fheader col-sm-12 col-md-3 col-lg-3 text-right home">
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
				<div class="fheader col-md-7 col-lg-7">
					<p>&copy; 2019 Fynches. All rights reserved</p>
				</div>
				<div class="fheader col-md-5 col-lg-5 text-right">
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


