<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use App\User;
use App\Event;
use App\UserMeta;
use App\ChildInfo;


class AccountController extends Controller
{
    public function index(){
        
        if (Auth::check()) {
            
            $user = Auth::user();
            
            return view('site.account.account-info', compact('user'));
            
        } else {
            
         $user = User::find(2);
            
            return view('site.account.account-info', compact('user'));
        
        }
    }
    
     public function storeAccountInfo(Request $request) {
         
        $id = Auth::id(); 
        $user = Auth::user();
        
        $firstName = $request->first_name;
        $lastName = $request->last_name;
        
        $userMeta = UserMeta::updateOrCreate(
            ['user_id' => $id],
            ['user_id' => $id, 'first_name' => $firstName, 
            'last_name' => $lastName
            ]
        );
        
        //$user->email = $request->email;
        //$user->save();
        
        return response()->json(['update' => 'Success']);
     }
    
    public function storeAlerts(Request $request) {
        
        $id = Auth::id();
        
        $gift_alerts = 0;
        $fynches_updates = 0;
        
        $gift_alerts = $request->gift_alerts;
        $fynches_updates = $request->fynches_updates;
        
        $userMeta = UserMeta::updateOrCreate(
            ['user_id' => $id],
            ['gift_alert' =>  $gift_alerts, 
            'fynches_updates' => $fynches_updates
            ]
        );
        
        return response()->json(['update' => 'Success']);
        
    }
    
    public function storePrivacy(Request $request) {
        
        $id = Auth::id();
        
        $google_visibility = $request->google_search;
        $fynches_visibility = $request->fynches_search;
        
        $userMeta = UserMeta::updateOrCreate(
            ['user_id' => $id],
            ['google_visibility' =>  $google_visibility, 
            'fynches_search_visibility' => $fynches_visibility
            ]
        );
        
        return response()->json(['update' => 'Success']);
        
    }
    
    public function storePassword(Request $request) {
        
        $id = Auth::id();
        $user = Auth::user();
        
        $current_password = $request->cpass;
        $new_password = $request->npass;
        
        if (Hash::check($current_password, $user->password)) {

        
        $user->password = Hash::make($new_password);
        $user->save();
        
        return response()->json(['update' => 'Success']);
        
        } else {
            
            return response()->json(['update' => 'not-password']);
            
        }
        
    }
    
    public function storeHostChild(Request $request) {
        
        $id = Auth::id();
        
            $host_fname = $request->host_fname;
            $host_lname = $request->host_lname;
            $child_fname = $request->child_fname;
            $child_age = $request->child_age;
        
  
        $userMeta = Event::updateOrCreate(
            ['user_id' => $id],
            ['user_id' => $id, 'first_name' =>  $host_fname, 
            'last_name' => $host_lname
            ]
        );
        
        $userMeta = ChildInfo::updateOrCreate(
            ['user_id' => $id],
            ['user_id' => $id,'first_name' =>  $child_fname, 
            'age_range' => $child_age
            ]
        );
        
        return response()->json(['update' => 'Success']);
        
    }
    
    public function storeLocation(Request $request) {
        
        $id = Auth::id();
        
            
        
            $not_decided = $request->not_decided;
            $event_publish_date = $request->party_time;
            $zipcode = $request->zip_code;
        
  
        $event = Event::updateOrCreate(
            ['user_id' => $id],
            ['event_publish_date' =>  $event_publish_date, 
            'zipcode' => $zipcode,
            'not_decided' => $not_decided
            ]
        );
        
        
        return response()->json(['update' => 'Success']);
        
    }
    
    public function storeLink(Request $request) {
        
        $id = Auth::id();
        
            $gift_link = $request->gift_link;

        $event = Event::updateOrCreate(
            ['user_id' => $id],
            ['publish_url' =>  $gift_link
            ]
        );
        
        return response()->json(['update' => 'Success']);
        
    }
    
}