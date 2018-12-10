<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\UserMeta;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	
    }

   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        
        if (Auth::check()) {
            
            $user = Auth::user();
   
            	return view('site.shop.shop', compact('user'));
            
        } else {
            
        return redirect()->route('home');
        
        }
        
        
      }
	    
	    
	    
    

	
	
    
}