<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    protected $fillable = ['plan_name','price','description','feature_key','feature_value'];

public function DurationDay($time , $day)
    {
        return  floatval($time * $day);
    
    }
}



