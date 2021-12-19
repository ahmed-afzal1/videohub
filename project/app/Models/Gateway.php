<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    protected $casts = [
        'gateway_parameters' => 'object',
        'user_proof_param' => 'array'
    ];

    protected $guarded = [];


    public function image()
    {
        return $this->morphOne(ShowImage::class, 'imageable')->withDefault();
    }

}
