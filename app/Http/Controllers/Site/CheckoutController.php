<?php
namespace App\Http\Controllers\Site;

include(app_path() . '/Libraries/Stripe/init.php');

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\UserMeta;
use App\GiftPurchase;
use Stripe;
use App\GiftPage;

class CheckoutController extends Controller
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
       
        $session_id = session()->getId();
        
        $gift_purchase = GiftPurchase::where('session_id', $session_id)->where('status', 1)->get();
        
        foreach($gift_purchase as $purchase) {
            $gift_page = GiftPage::where('id', $purchase->gift_page_id)->first();
        }
        
        $session_total = $gift_purchase->sum('amount');
        
        $count = count($gift_purchase);
   
        return view('site.checkout.checkout', compact('gift_purchase', 'session_total', 'count', 'gift_page'));
        
        
      }
      
      public function checkoutsuccess(){
            
            $session_id = session()->getId();
            
            $email = GiftPurchase::where('session_id',  $session_id)->first();
   
            return view('site.checkout.checkout-success', compact('email'));
        
      }
      
      public function remove(Request $request){
          
            $purchase_id = $request->gift_id;
            
            $destroy = GiftPurchase::destroy($purchase_id);
            
            return response()->json(['result' => $purchase_id]);
       
      }
      
      public function order(Request $request){
          
            $purchase_id = $request->gift_id;
            $name = $request->name;
    	    $number = $request->number;
    	    $month = $request->month;
    	    $year = $request->year;
    	    $cvv = $request->cvv;
    	    $fname = $request->fname;
    	    $lname = $request->lname;
    	    $address = $request->address;
    	    $city = $request->city;
    	    $state = $request->state;
    	    $zip = $request->zip;
    	    $country = $request->country;
    	    $email = $request->email;
    	    $confirm = $request->confirm;
    	    $total = $request->total;
    	    
    	    $total = $total * 100;
    	    
    	    try {
    	    
            \Stripe\Stripe::setApiKey('sk_test_CodDvEhYBltGPceiNe9S4Syo');
            
            $token = \Stripe\Token::create(array("card" => array("number" => $number, 
                                                                "exp_month" => $month, 
                                                                "exp_year" => $year, 
                                                                "cvc" => $cvv,
                                                                "name" => $name,
                                                                "address_line1" => $address,
                                                                "address_city" => $city, 
                                                                "address_state" => $state, 
                                                                "address_zip" => $zip
                                                                )));
                                                                
            $charge = \Stripe\Charge::create(['amount' => $total, 'currency' => 'usd', 'source' => $token]);
            
            $session_id = session()->getId();
            
            $background = GiftPurchase::updateOrCreate(
            ['session_id' => $session_id],
            ['status' => 2, 'email' => $email]
            );
            
            return response()->json(['result' => 'Success - Payment Proccessed', 'success' => 1]);
            
            } catch(Stripe_CardError $e) {
              // Since it's a decline, Stripe_CardError will be caught
              
              return response()->json(['result' => $e->getMessage()]);  
              //print('Status is:' . $e->getHttpStatus() . "\n");
              //print('Type is:' . $err['type'] . "\n");
              //print('Code is:' . $err['code'] . "\n");
              // param is '' in this case
              //print('Param is:' . $err['param'] . "\n");
              //print('Message is:' . $err['message'] . "\n");
            } catch (Stripe_InvalidRequestError $e) {
                return response()->json(['result' => $e->getMessage()]);
              // Invalid parameters were supplied to Stripe's API
            } catch (Stripe_AuthenticationError $e) {
                return response()->json(['result' => $e->getMessage()]);
              // Authentication with Stripe's API failed
              // (maybe you changed API keys recently)
            } catch (Stripe_ApiConnectionError $e) {
                return response()->json(['result' => $e->getMessage()]);
              // Network communication with Stripe failed
            } catch (Stripe_Error $e) {
                return response()->json(['result' => $e->getMessage()]);
              // Display a very generic error to the user, and maybe send
              // yourself an email
            } catch (\Exception $e) {
                return response()->json(['result' => $e->getMessage()]);
              // Something else happened, completely unrelated to Stripe
            }
            
            
       
      }
      
      public function test() {
            //include(app_path() . '/Libraries/Stripe/init.php');
            \Stripe\Stripe::setApiKey('sk_test_CodDvEhYBltGPceiNe9S4Syo');
            
            $token = \Stripe\Token::create(array("card" => array("number" => '4242424242424242', 
                                                                "exp_month" => 10, 
                                                                "exp_year" => 2020, 
                                                                "cvc" => 314)));
                                                                
            $charge = \Stripe\Charge::create(['amount' => 2000, 'currency' => 'usd', 'source' => $token]);
            echo $charge;
      }
	    
}