<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class Favarite extends Model
{
    protected $fillable = ['user_id','video_id'];

    public function video()
    {
        return $this->hasOne('App\Models\Movie','id','video_id');
    }
}
