<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $casts = [
        'meaning' => 'array'
    ];

    protected $guarded = [];
}
