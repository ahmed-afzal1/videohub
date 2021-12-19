<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\CastCrew;

class Movie extends Model
{
    protected $casts = ['category_id' => 'array','tag' => 'array'];
    
    protected $fillable = ['title','video','video_type','tag','description','access','relase_date',
    'producer','directors','cast',
    'genre_id','status','heighlight','slug','language_id','category_id'];

    
    public function language()
    {
      return  $this->belongsTo('App\Models\VideoLanguage');
    }   


    public function image()
    {
        return $this->morphOne('App\Models\ShowImage', 'imageable')->withDefault();
    }

    public function getHeighlightAttribute($value)
    {
        if($value == null)
        {
            return '';
        }
        return explode(',', $value);
    }
    public function getTagAttribute($value)
    {
        if($value == null)
        {
            return '';
        }
        return explode(',', $value);
    }


    public function getGenreIdAttribute($value)
    {
        if($value == null)
        {
            return '';
        }
        return explode(',', $value);
    }


    public function getProducerAttribute($value)
    {
        if($value == null)
        {
            return '';
        }
        return explode(',', $value);
    }

    public function getDirectorsAttribute($value)
    {
        if($value == null)
        {
            return '';
        }
        return explode(',', $value);
    }
    public function getCastAttribute($value)
    {
        if($value == null)
        {
            return '';
        }
        return explode(',', $value);
    }
 
    public function genres()
    {
        if($this->genre_id == null)
        {
            return '';
        }
        return DB::table('genres')->whereIn('id',$this->genre_id)->orderby('id','desc')->take(4)->get();
    }

    public function directors()
    {
        if($this->directors == null)
        {
            return '';
        }
        return CastCrew::whereIn('id',$this->directors)->orderby('id','desc')->get();
    }

    public function producer()
    {
        if($this->directors == null)
        {
            return '';
        }
        return CastCrew::whereIn('id',$this->producer)->orderby('id','desc')->get();
    }

    public function cast()
    {
        if($this->cast == null)
        {
            return '';
        }
        return CastCrew::whereIn('id',$this->cast)->orderby('id','desc')->get();
    }


    public function videoReview()
    {
        return $this->hasMany('App\Models\Review','video_id','id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    
}


