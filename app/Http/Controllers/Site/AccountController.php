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
use App\GiftPage;


class AccountController extends Controller
{
    public function index(){
        
        if (Auth::check()) {
            
            $user = Auth::user();
            
            return view('site.account.account-info', compact('user'));
            
        } else {
            
            return redirect()->route('home');
        
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
        $nocn = $request->nocn;
        
        if($nocn == 1) {
            
        $user->password = Hash::make($new_password);
        $user->save();
        
        return response()->json(['update' => 'Success']);
        }
        
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
            
        $child = ChildInfo::updateOrCreate(
            ['user_id' => $id,'first_name' =>  $child_fname],
            ['user_id' => $id,'first_name' =>  $child_fname, 
            'age_range' => $child_age
            ]
        );    
            
        $page = GiftPage::updateOrCreate(
            ['user_id' => $id, 'child_info_id' => $child->id],
            ['user_id' => $id,'page_hostname' =>  $host_fname.' '.$host_lname,
            'child_info_id' => $child->id
            ]
        );    
        
        ChildInfo::updateOrCreate(
            ['user_id' => $id,'first_name' =>  $child_fname],
            ['user_id' => $id,'first_name' =>  $child_fname, 
            'age_range' => $child_age, 'gift_page_id' => $page->id 
            ]
        );
        
        return response()->json(['update' => 'Success']);
        
    }
    
    public function storeLocation(Request $request) {
        
        $id = Auth::id();
        
            $not_decided = $request->not_decided;
            $event_publish_date = $request->party_time;
            $zipcode = $request->zip_code;
            $child = $request->child;
        
  
        $child = ChildInfo::updateOrCreate(
            ['user_id' => $id, 'first_name' =>  $child],
            ['child_zipcode' => $zipcode]
        );
        
        GiftPage::updateOrCreate(
            ['user_id' => $id, 'child_info_id' => $child->id],
            ['page_date' => $event_publish_date
            ]
        );
        
        return response()->json(['update' => 'Success']);
        
    }
    
    public function storeLink(Request $request) {
        
        $id = Auth::id();
        
            $gift_link = $request->gift_link;
            $child = $request->child;
        
        $child = ChildInfo::where('user_id',$id)->where('first_name', $child)->first();
        
        GiftPage::updateOrCreate(
            ['user_id' => $id, 'child_info_id' => $child->id],
            ['slug' =>  $gift_link]
        );
        
        $input = $request->pic_src;
        $output = 'public/images/profile_images/' . $gift_link . '.png';
        file_put_contents($output, file_get_contents($input));
        
        ChildInfo::updateOrCreate(
            ['id' => $child->id, 'user_id' => $id],
            ['recipient_image' => 'http://fynches.codeandsilver.com/public/images/profile_images/' . $gift_link . '.png']
        );
        
        return response()->json(['update' => 'Success']);
        
    }
    
    public function test() {
        $id = Auth::id();
        
            $gift_link = 'Jorge';
            $child = 'Jorge';
        
        return response()->json(['id' => $id]);
        
        $child = ChildInfo::where('user_id',$id)->where('first_name', $child)->first();
        
        ?>
        <pre>
        <?php
        print_r($child);
        return;
        ?>
        </pre>
        <?php
        
        GiftPage::updateOrCreate(
            ['user_id' => $id, 'child_info_id' => $child->id],
            ['slug' =>  $gift_link]
        );
        
        $input = $request->pic_src;
        $output = 'public/images/profile_images/' . $gift_link . '.png';
        file_put_contents($output, file_get_contents($input));
        
        ChildInfo::updateOrCreate(
            ['id' => $child->id, 'user_id' => $id],
            ['recipient_image' => 'https://fynches.codeandsilver.com/public/images/profile_images/' . $gift_link . '.png']
        );
        
    }
    
}