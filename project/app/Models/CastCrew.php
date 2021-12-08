<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CastCrew extends Model
{
    protected $fillable = ['name','bio','status'];
    public function image()
    {
        return $this->morphOne('App\Models\ShowImage', 'imageable')->withDefault();
    }
}
