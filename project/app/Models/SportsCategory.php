<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SportsCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'status',
    ];

    public function image()
    {
        return $this->morphOne('App\Models\ShowImage', 'imageable')->withDefault();
    }
}
