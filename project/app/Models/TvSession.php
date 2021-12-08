<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TvSession extends Model
{
    protected $fillable = ['show_id','session_title','status','slug'];
    
    public function image()
    {
        return $this->morphOne('App\Models\ShowImage', 'imageable')->withDefault();
    }


    public function show()
    {
        return $this->hasOne('App\Models\TvShow', 'id','show_id')->withDefault();
    }

    public function episodes()
    {
        return $this->hasMany('App\Models\Episode', 'tv_session_id','id');
    }
}
