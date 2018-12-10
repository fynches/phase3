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

Route::prefix('site')->group(function() {
	Route::get('logout/', 'Auth\SiteLoginController@logout')->name('site.logout');
	
});

Route::post('/signup','Site\HomeController@signup');
Route::post('/signin','Site\HomeController@signin');
Route::get('/account', 'Site\AccountController@index')->name('account');
Route::post('/account/store-info', 'Site\AccountController@storeAccountInfo');
Route::post('/account/alerts', 'Site\AccountController@storeAlerts');
Route::post('/account/privacy', 'Site\AccountController@storePrivacy');
Route::post('/account/password', 'Site\AccountController@storePassword');
Route::post('/account/host-child', 'Site\AccountController@storeHostChild');
Route::post('/account/location', 'Site\AccountController@storeLocation');
Route::post('/account/gift-link', 'Site\AccountController@storeLink');
//************* End Parent Child Info******************//


//**************Start Gift_Page***************//

Route::get('/gift', 'Site\GiftController@index')->name('gift');

//**************end Gift_Page***************//

//**************Start Shop_Page***************//

Route::get('/shop', 'Site\ShopController@index')->name('shop');

//**************end Shop_Page***************//

//**************Start Checkout_Page***************//

Route::get('/checkout', 'Site\CheckoutController@index')->name('checkout');

//**************end Checkout_Page***************//

