<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\UserMeta;
use App\Gift;
use App\GiftPage;

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
    public function index($slug){
        
        if (Auth::check()) {
            
            $user = Auth::user();
            $gift_page =  GiftPage::where('user_id', $user->id)->where('slug', $slug)->first();
            
            if(isset($gift_page->added_gifts)) {
                $added_gifts_ids = unserialize($gift_page->added_gifts);
                $added_gifts = Gift::whereIn('id',$added_gifts_ids)->get();
            }
            
            $gifts = Gift::all();
            
            	return view('site.shop.shop', compact('user','gifts','gift_page','added_gifts','added_gifts_ids'));
            
            
        } else {
            
        return redirect()->route('home');
        
        }
        
        
      }
	    
	public function favorite(Request $request)  {
	    
	    if (Auth::check()) {
            
            $user = Auth::user();
   
        $slug = $request->slug;
        $page_fav = GiftPage::where('user_id',$user->id)->where('slug',$slug)->first();
        $favorites = unserialize($page_fav->favorites);
        $new_fav = $request->id;
        
        if(!empty($favorites)  && in_array($new_fav,$favorites)){
            
            $is_favorite = 1;
            unset($favorites[array_search($new_fav,$favorites)]);
        
       } else if(empty($favorites)) {
            $is_favorite = 0;
            $favorites = array($new_fav);
       }
        else {
        
            $is_favorite = 0;
            array_push($favorites,$new_fav);
        }
        
        $page_fav->favorites = serialize($favorites);
        $page_fav->save();
        
        $gift = Gift::where('id',$new_fav)->first();
        
        //Added Check
        $added = unserialize($page_fav->added_gifts);
        
        if(!empty($added)  && in_array($new_fav,$added)){
            
            $added = 1;
        
       } else {
           
           $added = 0;
           
       }
        return response()->json(['giftPage' => $page_fav,'gift' => $gift,'business' => $gift->business->name,'age' => $gift->age_range->age_range,'image' => $gift->images->image_urls,'favorites' => $favorites, 'is' => $is_favorite, 'added' => $added]);
        } 
	} 
	
		public function favorited(Request $request)  {
	    
	    if (Auth::check()) {
            
            $user = Auth::user();
   
        $slug = $request->slug;
        $page_fav = GiftPage::where('user_id',$user->id)->where('slug',$slug)->first();
        $favorites = unserialize($page_fav->favorites);
        $new_fav = $request->id;
        if(!empty($favorites)  && in_array($new_fav,$favorites)){
           
            unset($favorites[array_search($new_fav,$favorites)]);
       } 
        
        $page_fav->favorites = serialize($favorites);
        $page_fav->update();
        
        $gift = Gift::where('id',$new_fav)->first();
        
        return response()->json(['removed' => $new_fav]);
            
        } else {
            
        return redirect()->route('home');
        
        }
	}
	
	public function addGift(Request $request) {
          if (Auth::check()) {
            
            $user = Auth::user();
        
        $slug = $request->slug;
        $giftPage = GiftPage::where('user_id',$user->id)->where('slug',$slug)->first();
        $added = unserialize($giftPage->added_gifts);
        $favorites = unserialize($giftPage->favorites);
        $id = (int)$request->id;
        
        if(!empty($added)  && in_array($id,$added)){
            $is_added = 1;
            
       } else if(empty($added)) {
            $is_added = 0;
            $added = array($id);
       }
        else {
        
            $is_added = 0;
            array_push($added,$id);
        }
        
        if(in_array($id,$favorites)) {
            $is_fav = 'favorited-button';
        }
        else {
            $is_fav = 'favorite-button';
        }
        
        $giftPage->added_gifts = serialize($added);
        $giftPage->save();
        
        $gift = Gift::where('id',$id)->first();
        
        return response()->json(['giftPage' => $giftPage,'gift' => $gift,'business' => $gift->business->name,'age' => $gift->age_range->age_range,'image' => $gift->images->image_urls,'added' => $added, 'is' => $is_added, 'favorite' => $is_fav]);
            
        } 
	}
	
	public function removeGift(Request $request) {
          if (Auth::check()) {
            
            $user = Auth::user();
        
        $slug = $request->slug;
        $giftPage = GiftPage::where('user_id',$user->id)->where('slug',$slug)->first();
        $added = unserialize($giftPage->added_gifts);
        $id = (int)$request->id;
        
        if(!empty($added)  && in_array($id,$added)){
            $is_added = 1;
            unset($added[array_search($id,$added)]);
            
       } else {
            $is_added = 0;
        }
        
        $giftPage->added_gifts = serialize($added);
        $giftPage->save();
        
        $gift = Gift::where('id',$id)->first();
        
        return response()->json(['id' => $gift->id,'is' => $is_added,'gift' => $gift]);
            
        } 
	}
	
	public function category(Request $request){
	    
	    if(Auth::check()) {
            $user_id = Auth::user()->id;
        }
        $categories = $request->categories;
        $ages = $request->ages;
        $miles = $request->miles;
        
        $gifts = Gift::all();
        
        foreach($gifts as $i => $gift) {
            if(!empty(array_intersect(unserialize($gift->categories),$categories))) {
                $searchCategories[$i] = $gift->id;
            }
            if(array_search($gift->for_ages,$ages)) {
                $searchAges[$i] = $gift->id;
            }
        }
        $gift_ids = array_intersect($searchCategories,$searchAges);
	       
        return response()->json(['gift_id' => $gift_ids]);
	}
	
	 public function test() {
        if (Auth::check()) {
        
            $user = Auth::user();
        
            $slug = 'ehub';
            $giftPage = GiftPage::where('user_id',$user->id)->where('slug',$slug)->first();
            $added = unserialize($giftPage->added_gifts);
            $favorites = unserialize($giftPage->favorites);
            $id = 3;
            
            if(!empty($added)  && in_array($id,$added)){
                $is_added = 1;
                
           } else if(empty($added)) {
                $is_added = 0;
                $added = array($id);
           }
            else {
            
                $is_added = 0;
                array_push($added,$id);
            }
            
            if(in_array($id,$favorites)) {
                $is_fav = 'favorited-button';
            }
            else {
                $is_fav = 'favorite-button';
            }
            
            $giftPage->added_gifts = serialize($added);
            $giftPage->save();
            
            $gift = Gift::where('id',$id)->first();
            
            return response()->json(['giftPage' => $giftPage,'gift' => $gift,'business' => $gift->business->name,'age' => $gift->age_range->age_range,'image' => $gift->images->image_urls,'added' => $added, 'is' => $is_added, 'favorite' => $is_fav]);
                
        } 
          
        ?>
        <pre>
        <?php
        return response()->json(['gift_id' => $gift_ids]);
        ?>
        </pre>
        <?php
            
    } 
}