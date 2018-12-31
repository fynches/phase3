<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\UserMeta;
use App\GiftPage;

class SearchController extends Controller
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
        
            	return view('site.search.search');
       
      }
	    
	public function search(Request $request) {
	   
	    $lastName = $request->lastName;
	    
	    if(($giftPages = GiftPage::where('page_hostname','LIKE',"%$lastName"))->exists()) {
	        $giftPages = $giftPages->get();
    	    foreach($giftPages as $i => $page) {
    	        $childInfo[$i] = $page->child;
    	    }
	    }
	    else {
	        $giftPages = null;
	        $childInfo = null;
	    }
	    
	    return response()->json(['giftPages' => $giftPages,'childInfo' => $childInfo]);
	    
	}    
	    
   public function test() {
       
       $lastName = 'Dunham';
	    
	    if(($giftPages = GiftPage::where('page_hostname','LIKE',"%$lastName"))->exists()) {
	        $giftPages = $giftPages->get();
    	    foreach($giftPages as $i => $page) {
    	        $childInfo[$i] = $page->child;
    	    }
	    }
	    else {
	        $giftPages = null;
	    }
	    ?>
	    <pre>
	    <?php
	    print_r($childInfo);
	    return;
	    ?>
	    </pre>
	    <?php
       
   } 

	
	
    
}