<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class GiftPurchase extends Model {
    
    protected $table = 'gift_purchases';
    protected $fillable = ['user_id', 'gift_id', 'session_id', 'gift_page_id', 'amount', 'status', 'email'];
    
    public $timestamps = false;
    
    public function gift()
    {
        return $this->hasOne('App\Gift', 'id', 'gift_id' );
    }
    
    public function child()
    {
        return $this->hasOne('App\ChildInfo', 'gift_page_id', 'gift_page_id' );
    }
    
    
}

?>