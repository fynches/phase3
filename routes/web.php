<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

View::addExtension('html', 'php');

Route::get('/','Site\HomeController@index')->name('home');

Route::get('/admin', function() {
	return Redirect::to("admin/login");
});

Route::get('/login', function() {
	return Redirect::to("admin/login");
});

//*************Start Gift_Dashboard******************//
Route::get('/gift-dashboard', 'Site\GiftDashboardController@index');
Route::get('/gifted', 'Site\GiftDashboardController@gifted');
Route::post('/delete-gifted', 'Site\GiftDashboardController@deleteGift')->name('delete-gift');;
Route::get('/event', 'Site\EventController@create')->name('event');


//*************End Gift_Dashboard******************//


//************* Start Parent Child Info******************//
Route::get('/parent-child-info','Site\ParentChildController@index')->name('info');
Route::get('/date-location', function() {return Redirect::to("/parent-child-info");})->name('info');
Route::get('/page-link', function() {return Redirect::to("/parent-child-info");})->name('info');
Route::get('/congrats', function() {return Redirect::to("/parent-child-info");})->name('info');
Route::post('/parent-child-info/store', 'Site\ParentChildController@storeInfo');

Route::group(['middleware' => 'guest'], function () {	
	Route::auth();
	Route::post('/user/register', 'Site\UserController@create');
});


Route::get('logout', 'Auth\SiteLoginController@logout');


Route::post('/signup','Site\HomeController@signup');
Route::post('/signin','Site\HomeController@signin');
Route::post('/reset','Site\HomeController@passwordReset');

Route::get('/account', 'Site\AccountController@index')->name('account');
Route::get('/password-reset', 'Site\AccountController@index')->name('account');
Route::post('/account/store-info', 'Site\AccountController@storeAccountInfo');
Route::post('/account/alerts', 'Site\AccountController@storeAlerts');
Route::post('/account/privacy', 'Site\AccountController@storePrivacy');
Route::post('/account/password', 'Site\AccountController@storePassword');
Route::post('/account/host-child', 'Site\AccountController@storeHostChild');
Route::post('/account/location', 'Site\AccountController@storeLocation');
Route::post('/account/gift-link', 'Site\AccountController@storeLink');
Route::get('/account/test', 'Site\AccountController@test');
//************* End Parent Child Info******************//


//**************Start Gift_Page***************//

Route::get('/gift/{first_name}', 'Site\GiftController@index')->name('gift');
Route::post('/update-gift-page', 'Site\GiftController@updateGiftPage');
Route::post('/background-image', 'Site\GiftController@saveBackgroundImages');
Route::post('/profile-image', 'Site\GiftController@saveProfileImage');
Route::post('/update-child-zipcode', 'Site\GiftController@updateChildZipcode');
Route::post('/giftDetails', 'Site\GiftController@giftDetails');

Route::get('/test', 'Site\ShopController@test');

//**************end Gift_Page***************//

//**************Start Shop_Page***************//

Route::get('/shop/{slug}', 'Site\ShopController@index')->name('shop');
Route::post('/favorite','Site\ShopController@favorite');
Route::post('/favorited','Site\ShopController@favorited');
Route::post('/addGift','Site\ShopController@addGift');
Route::post('/removeGift','Site\ShopController@removeGift');
Route::post('/category','Site\ShopController@category');

//**************end Shop_Page***************//

//**************Start Checkout_Page***************//

Route::get('/checkout', 'Site\CheckoutController@index')->name('checkout');
Route::post('/checkout/remove-gift','Site\CheckoutController@remove');
Route::post('/checkout/place-order','Site\CheckoutController@order');
Route::get('/checkout-success','Site\CheckoutController@checkoutsuccess');

//**************end Checkout_Page***************//


//**************Start Redeem_Page***************//

Route::get('/redeem-gifts', 'Site\RedeemController@index')->name('redeem');
Route::get('/redeem-success','Site\RedeemController@success');

//**************end Redeem_Page***************//

//**************Start Search_Page***************//

Route::get('/search', 'Site\SearchController@index')->name('search');


//**************End Search_Page***************//

//**************Start Report_Page***************//

Route::get('/gift-report', 'Site\ReportController@index')->name('report');


//**************End Report_Page***************//

//**************Start LiveGift_Page***************//

//Route::get('/gift-live', 'Site\LiveGiftController@index')->name('livegift');
Route::get('/gift-page/{slug}', 'Site\LiveGiftController@index')->name('livegift');
Route::post('/gift-live/message','Site\LiveGiftController@sendMessage');
Route::post('/gift-live/cart','Site\LiveGiftController@cart');




//**************End LiveGift_Page***************//

//**************Start Password Reset***************//

Route::get('autologin/{token}', ['as' => 'autologin', 'uses' => '\Watson\Autologin\AutologinController@autologin']);
