@extends('site.shop.shop-layout')

@section('header')
    <header id="shop_head">
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
                <button class="btn common btn-border" id="btn_blk">CREATE CUSTOM GIFT</button>
				<button class="btn common btn-border" id="btn_blk">PREVIEW GIFT PAGE</button>
				<button class="btn common btn-border" id="btn_blk">MANAGE GIFT PAGE</button>
            </div>
        </div>
    </div>
</section>

<!-- Layer2 -->
<section class="shop_experience">
	<div class="container-fluid cont">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2 class="shop_title">This is a Promotional Banner</h2>
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
                        <input type="checkbox"/>
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
                        <input type="checkbox"/>
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
                        <input type="checkbox"/>
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
                        <input type="checkbox"/>
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
                        <input type="checkbox"/>
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
                            <input type="checkbox"/>
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
                            <input type="checkbox"/>
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
                            <input type="checkbox"/>
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
                            <input type="checkbox"/>
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
                            <input type="checkbox"/>
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
                            <input type="checkbox"/>
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
                            <input type="checkbox"/>
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
                            <input type="checkbox"/>
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
                            <input type="checkbox"/>
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
                <div class="row">
                <div class="col-md-4" id="reco_col">
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
                                <button class="btn btn-primary btn-lg yellow_submit">QIUCK ADD</button>
                            </div>
                            <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                <p style="font-weight:bold;font-size:18px;">$25.00</p>
                                <p>Est. Price <i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>  
                    </div>    
                </div>
                
                <div class="col-md-4" id="reco_col">
                <img  src="http://fynches.codeandsilver.com/public/front/img/reco_2.png" style="width:100%" >
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
                                <button class="btn btn-primary btn-lg yellow_submit">QIUCK ADD</button>
                            </div>
                            <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                <p style="font-weight:bold;font-size:18px;">$25.00</p>
                                <p>Est. Price <i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>  
                    </div>    
                </div>
                
                <div class="col-md-4" id="reco_col">
                <img src="http://fynches.codeandsilver.com/public/front/img/reco_3.png" style="width:100%" data-toggle="modal">
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
                                <button class="btn btn-primary btn-lg yellow_submit">QIUCK ADD</button>
                            </div>
                            <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                <p style="font-weight:bold;font-size:18px;">$25.00</p>
                                <p>Est. Price <i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>  
                    </div>    
                </div>
                </div>
                
                <div class="row"     style="margin-top: 50px;">
                <div class="col-md-4" id="reco_col">
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
                                <button class="btn btn-primary btn-lg yellow_submit">QIUCK ADD</button>
                            </div>
                            <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                <p style="font-weight:bold;font-size:18px;">$25.00</p>
                                <p>Est. Price <i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>  
                    </div>    
                </div>
                
                <div class="col-md-4" id="reco_col">
                <img  src="http://fynches.codeandsilver.com/public/front/img/reco_2.png" style="width:100%" >
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
                                <button class="btn btn-primary btn-lg yellow_submit">QIUCK ADD</button>
                            </div>
                            <div class="col-md-6 col-xs-6 text-right" id="gift_price">
                                <p style="font-weight:bold;font-size:18px;">$25.00</p>
                                <p>Est. Price <i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>  
                    </div>    
                </div>
                
                <div class="col-md-4" id="reco_col">
                <img src="http://fynches.codeandsilver.com/public/front/img/reco_3.png" style="width:100%" data-toggle="modal">
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
                                <button class="btn btn-primary btn-lg yellow_submit">QIUCK ADD</button>
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


