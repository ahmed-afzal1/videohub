<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Auth;
use App\Models\Order;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','photo','verification_link','email_verified','birthday','phone','gander','address','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function review()
    {
        return $this->hasOne('App\Models\Review');
    }
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function favarite()
    {
        return $this->hasOne('App\Models\Favarite');
    }

    public function plan()
    {
        return $this->hasMany('App\Models\Order','user_id','id');
    }

    public function planTime()
    {
        $order = Order::where('user_id',Auth::user()->id)->orderby('id','desc')->first();
        if($order){
            if($order->plan->time ==1){
                $time = 'day';
              }elseif($order->plan->time == 30){
                $time = 'month';
              }else{
                $time = 'year';
              }
    
            $create = Carbon::parse(Carbon::now());
            $expire = Carbon::parse($order->created_at->add($order->plan->duration . ' '. $time)); 
    
            if($expire->gt($create)){
                return true;
            }else{
              return false;
            }
        }

        

        
        
    }




    
    
}
