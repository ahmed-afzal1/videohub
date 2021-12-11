<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class TvShow extends Model
{
    protected $fillable = ['language_id','genre_id','show_name','description','status','slug','relase_date','access'];
    protected $casts = ['genre_id' => "array"];
    public function image()
    {
        return $this->morphOne('App\Models\ShowImage', 'imageable')->withDefault();
    }


    public function session()
    {
        return $this->hasMany('App\Models\TvSession','show_id','id');
    }

    public function episode()
    {
        return $this->hasMany('App\Models\Episode','tv_show_id','id');
    }

    public function language()
    {
        return $this->hasOne('App\Models\VideoLanguage','id','language_id');
    }

   

    public function genres()
    {
        if($this->genre_id == null)
        {
            return '';
        }
        return DB::table('genres')->whereIn('id',$this->genre_id)->orderby('id','desc')->take(4)->get();
    }


}
