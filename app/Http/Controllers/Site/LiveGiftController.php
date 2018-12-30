<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\UserMeta;
use App\GiftPage;
use App\Gift;
use App\ChildInfo;
use App\GiftPurchase;
use App\GiftMessages;
use Carbon\Carbon;


class LiveGiftController extends Controller
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
            
            $user = Auth::user();
            $gift_page =  GiftPage::where('slug', $slug)->first();
            
            $child_info =  ChildInfo::where('id', $gift_page->child_info_id)->first();
            
            
          //  var_dump($child_info);
          //  return;
            
            if(isset($gift_page->added_gifts)) {
            $added_gifts_ids = unserialize($gift_page->added_gifts);
            $added_gifts = Gift::whereIn('id',$added_gifts_ids)->get();
            }
            
            
           // $ago = $this->time($child_info->message->created_at);
            
            return view('site.live-gift-page.live-gift', compact('child_info', 'added_gifts', 'gift_page'));
      }
    
    public function sendMessage(Request $request) {
       
        $message = $request->message;
        $childs_name = $request->childs_name;
        $formname = $request->name;
        $child_info = ChildInfo::where('first_name', $childs_name)->first();
        $giftMessages = new GiftMessages;
        $giftMessages->child_info_id =  $child_info->id;
        $giftMessages->message = $message;
        $giftMessages->name = $formname;
        $giftMessages->save();
        return response()->json(['name' => $childs_name]);
        
        
    }
    
    public function cart(Request $request) {
       
        $amount = $request->amount;
        $gift_page_id = $request->gift_page_id;
        $gift_id = $request->gift_id;
        
        $gift_purchase = new GiftPurchase;
        $gift_purchase->amount =  $amount;
        $gift_purchase->gift_page_id = $gift_page_id;
        $gift_purchase->gift_id = $gift_id;
        $gift_purchase->session_id = session()->getId();
        $gift_purchase->status = 1;
        $gift_purchase->save();
        
        return response()->json(['success' => 1]);
     
        
    }
    
    public function time($t){
        
        $mytime = Carbon::now();
        return $mytime->toDateTimeString();
        
    } 

}