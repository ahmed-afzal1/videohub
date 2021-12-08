<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{

    protected $fillable = ['video_type','title','access','tv_show_id','tv_session_id','release_date','tag','description','video','duration','status','slug'];

    public function tvShow()
    {
        return $this->belongsTo('App\Models\TvShow')->withDefault();
    }


    public function tvSeason()
    {
        return $this->belongsTo('App\Models\TvSession')->withDefault();
    }

    public function image()
    {
        return $this->morphOne('App\Models\ShowImage', 'imageable')->withDefault();
    }
}
