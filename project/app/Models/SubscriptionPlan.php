<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    protected $fillable = ['plan_name', 'price','duration', 'description', 'plan_features','status'];

    protected $casts = [
        'plan_features' => 'array'
    ];

    public function DurationDay($time, $day)
    {
        return  floatval($time * $day);
    }
}
