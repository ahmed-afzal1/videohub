<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name','slug'];
    
    public function image()
    {
        return $this->morphOne('App\Models\ShowImage', 'imageable')->withDefault();
    }

  
   

}
