<?php

namespace App;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];

    public function movie()
    {
        return $this->belongsTo(Movie::class)->withDefault();
    }

    public static function upload($name, $file, $oldname)
    {

        $file->move('assets/images/poster', $name);
        if ($oldname != null) {
            if (file_exists('assets/images/poster/' . $oldname)) {
                unlink('assets/images/poster/' . $oldname);
            }
        }
    }
}
