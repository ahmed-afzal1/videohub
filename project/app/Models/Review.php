<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;


class Review extends Model
{
    protected $fillable = ['user_id','review_value','comment','video_id'];

    public function thisVideo($v)
    {
      return DB::table('reviews')->where('video_id',$v)->where('user_id',Auth::user()->id)->first() ;
    }

    public function video()
    {
     return $this->hasOne('App\Models\Movie','id','video_id');
    }

    public function avarage()
    {
        return $this->avg('review_value');
    }

    public function user()
    {
       return $this->hasOne('App\Models\User','id','user_id');
    }
}
