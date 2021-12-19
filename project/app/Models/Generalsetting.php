<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Image;

class Generalsetting extends Model
{
    protected $fillable = [
                    'header_logo',
                    'footer_logo',
                    'favicon',
                    'website_loader',
                    'admin_loader',
                    'breadcumb_banner',
                    'website_title',
                    'theme_color',
                    'secendary_color',
                    'tawk_id',
                    'disqus',
                    'is_tawk',
                    'is_disqus',
                    'is_verification',
                    'is_admin_loader',
                    'is_website_loader',
                    'footer_text',
                    'copy_right_text',
                    'error_text',
                    'error_title',
                    'error_photo',
                    'stripe_check',
                    'stripe_key',
                    'stripe_secret',
                    'paypal_check',
                    'paypal_sendbox_check',
                    'paypal_client_id',
                    'paypal_client_secret',
                    'from_email',
                    'email_method',
                    'smtp_config',
                    'from_name',
                ];

    public $timestamps = false;

    protected $casts = [ 'smtp_config' => 'object'];


    public function upload($name,$file,$oldname)
    {



                $file->move('assets/images',$name);
                if($oldname != null)
                {
                    if (file_exists(public_path().'/assets/images'.$oldname)) {
                        unlink(public_path().'/assets/images'.$oldname);
                    }
                }  
    }
}
