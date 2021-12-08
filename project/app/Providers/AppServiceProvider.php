<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
use Session;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $settings = DB::table('generalsettings')->find(1);

        view()->composer('*',function($settings){
          
            if (Session::has('language')) 
            {
                $data = DB::table('languages')->find(Session::get('language'));
                App::setlocale($data->name);   
            }
                
            else{
                
                $data = DB::table('languages')->where('is_default','=',1)->first();
                App::setlocale($data->name);
                
            }

            $settings->with('gs', DB::table('generalsettings')->find(1));
            $settings->with('ps', DB::table('pagesettings')->find(1));
             $settings->with('site_lang', $data);
        });
    }
}
