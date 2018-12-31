<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\UserMeta;
use App\GiftPage;
use App\ChildInfo;
use App\BackgroundImages;
use App\Gift;
use App\GiftMessages;
use App\Images;

class GiftController extends Controller
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
          
            $child_info =  ChildInfo::where('id', $gift_page->child_info_id)->first();
            $child_image = $child_info->recipient_image;
            
            if(!empty(unserialize($gift_page->rec_zip))) {
            $rec_ids = unserialize($gift_page->rec_zip);
            $rec_gifts = Gift::whereIn('id',$rec_ids)->get();
            }
            
            if(!empty(unserialize($gift_page->favorites))) {
            $favorite_ids = unserialize($gift_page->favorites);
            $favorite_gifts = Gift::whereIn('id',$favorite_ids)->get();
            }
            
            if(!empty(unserialize($gift_page->added_gifts))) {
            $added_gifts_ids = unserialize($gift_page->added_gifts);
            $added_gifts = Gift::whereIn('id',$added_gifts_ids)->orderByRaw('FIELD(id, '.implode(',', $added_gifts_ids).')')->get();
            }
            
            if(!isset($gift_page->id)){
                return redirect()->route('shop');
            }
         
            
            $background_images =  BackgroundImages::all();
            
            	return view('site.gift.gift', compact('user', 'gift_page','gifts','background_images', 'rec_gifts', 'favorite_gifts', 'added_gifts', 'added_gifts_ids','child_image'));
            
        } else {
            
        return redirect()->route('home');
        
        }
        
        
      }
      
      public function updateGiftPage(Request $request){
           if (Auth::check()) {
            
            $user = Auth::user();
            
            $gift_title = $request->gft_title;
            $gift_desc = $request->gft_det;
            $gift_date = $request->inp_date;
            $gift_age = $request->inp_age;
            $gift_host = $request->inp_host;
            $slug = $request->slug;
            
            //$gift_page =  GiftPage::where('user_id', $user->id)->where('slug', $slug)->first();
            //$child_info =  ChildInfo::where('id', $gift_page->child_info_id)->first();
            
            $gift_page = GiftPage::updateOrCreate(
            ['user_id' => $user->id, 'slug' => $slug],
            ['user_id' => $user->id, 'page_title' => $gift_title,'page_desc' => $gift_desc,'page_date' => $gift_date, 'page_hostname' => $gift_host ]
             );
             
             $updated = ChildInfo::updateOrCreate(
            ['user_id' => $user->id, 'gift_page_id' => $gift_page->id],
            ['user_id' => $user->id, 'age_range' => $gift_age]
             );
   
            	return response()->json(['result' => $slug]);
            
        } else {
            
        return redirect()->route('home');
        
        }
      }
      
      public function saveBackgroundImages(Request $request){
        
        if (Auth::check()) {
            
            $user = Auth::user();
            $image_id = $request->image_id;
            $page_id = $request->page_id;
            
            $background = GiftPage::updateOrCreate(
            ['user_id' => $user->id, 'id' => $page_id],
            ['background_id' => $image_id]
             );
            
            return response()->json(['url' => $background->background_image->image_url]);
            
        } else {
            
        return redirect()->route('home');
        
        }
        
        
      }
      
      public function saveProfileImage(Request $request) {
          if (Auth::check()) {
              $user = Auth::user();
          }
        $input = $request->image;
        $slug = $request->slug;
        $output = 'public/images/profile_images/' . $slug . '.png';
        file_put_contents($output, file_get_contents($input));
      }
      
      public function updateChildZipcode(Request $request){
        
        if (Auth::check()) {
            
            $user = Auth::user();
            $child_zipcode = $request->child_zipcode;
            $page_id = $request->page_id;
            
            $child = ChildInfo::updateOrCreate(
            ['user_id' => $user->id, 'gift_page_id' => $page_id],
            ['child_zipcode' => $child_zipcode]
             );
            
            return response()->json(['zip' => $child->child_zipcode]);
            
        } else {
            
        return redirect()->route('home');
        
        }
        
        
      }
      
      
      
       public function giftDetails(Request $request){
           
           $id=$request->id;
           
           $gift= Gift::find($id);
           
           $images = Images::all()->pluck('image_urls');
           
           $age_range= $gift->age_range->age_range;
           $bName= $gift->business->name;
           $bDet= $gift->business->details;
           $bAdd= $gift->business->address;
           $bPhone= $gift->business->phone;
           $bWeb= $gift->business->website;
           
           return response()->json(['gift' => $gift, 'images' => $images,'age_range' =>$age_range,'bName' => $bName,'address' => $bAdd, 'phone' =>$bPhone, 'website' => $bWeb, 'details' => $bDet]);
       }
      
      public function createGiftPage(){
          
          $user = Auth::user();
          
          $child = GiftPage::updateOrCreate(
            ['user_id' => $user->id],
            ['user_id' => $user->id]
          );
          
      }
      
      public function giftSort(Request $request) {
          
          if (Auth::check()) {
            $user = Auth::user();
          }
          $ids = $request->ids;
          $slug = $request->slug;
          $giftPage = GiftPage::where('user_id',$user->id)->where('slug',$slug)->first();
        
          $giftPage->added_gifts = serialize($ids);
          $giftPage->save();
          
          return response()->json(['message' => $ids]);
                      
      }
      
      public function test() {
          

	     if (Auth::check()) {
        $user = Auth::user();
        $message = 'test';
        $giftMessages = new GiftMessages;
        $giftMessages->name = ChildInfo::where('user_id',$user->id)->first()->first_name;
        $giftMessages->message = $message;
        $giftMessages->child_info_id = ChildInfo::where('user_id',$user->id)->first()->id;
        $giftMessages->save();
        }
    }
      
      
	    
}