<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model {
    
    protected $table = 'gifts';
    protected $fillable = ['user_id', 'business_id', 'image_id'];
    
    public function business() 
    {
        return $this->hasOne('App\Business','id','business_id');
    }
    
    public function images() 
    {
        return $this->hasOne('App\Images','business_id','business_id');
    }
    
    public function age_range()
    {
        return $this->hasOne('App\AgeRange','id','for_ages');
    }
    
    public function needed($page_id)
    {
        return $this->hasMany('App\GiftPurchase','gift_id','id')->where('status', 2)->where('gift_page_id', $page_id);
    }
}

?>