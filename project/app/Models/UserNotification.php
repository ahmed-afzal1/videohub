<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    public static function countNotifications($id)
    {
        return UserNotification::where('user_id','=', $id)->get()->count();
    }
}
