<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SportsVideo extends Model
{
    protected $fillable = ['video_type','title','slug','access','sports_category_id','release_date','tag','description','video','duration','status'];


    public function SportsCategory()
    {
        return $this->belongsTo('App\Models\SportsCategory');
    }

    public function image()
    {
        return $this->morphOne('App\Models\ShowImage', 'imageable')->withDefault();
    }

    public function videoReview()
    {
        return $this->hasMany('App\Models\Review','video_id','id');
    }
}
