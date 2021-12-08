<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagesetting extends Model
{
    protected $fillable = [
        'success_message',
        'contact_email',
        'day',
        'time',
        'street_address',
        'contact_number',
        'fax',
        'meta_key',
        'meta_description',
        'home_page_photo',
        'home_page_title',
        'trending_section',
        'recent_section',
        'new_section',
        'old_section',
    ];

    public $timestamps = false;

    public function upload($name,$file,$oldname)
    {
                $file->move('assets/images/page-setting',$name);
                if($oldname != null)
                {
                    if (file_exists(public_path().'/assets/images/page-setting/'.$oldname)) {
                        unlink(public_path().'/assets/images/page-setting/'.$oldname);
                    }
                }  
    }

}
