<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function plan()
    {
      return  $this->hasOne('App\Models\SubscriptionPlan','id','plan_id');
    }
    
     public function user()
    {
      return  $this->hasOne('App\Models\User','id','user_id');
    }
}
