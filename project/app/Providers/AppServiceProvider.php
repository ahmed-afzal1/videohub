<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;
use Session;
use App;
use App\Models\Generalsetting;
use App\Models\Language;
use App\Models\Movie;
use App\Models\Pagesetting;

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
        $settings = Generalsetting::first();

        view()->composer('*',function($settings){
          
            if (Session::has('language')) 
            {
                $data = Language::find(Session::get('language'));
                App::setlocale($data->name);   
            }
                
            else{
                
                $data = Language::where('is_default','=',1)->first();
                App::setlocale($data->name);
                
            }

            $settings->with('gs', Generalsetting::first());
            $settings->with('ps', Pagesetting::first());
            $settings->with('site_lang', $data);
        });

        $movies = Movie::where('status',1)->latest()->with('image');



        view()->share('movies', $movies);
    }
}
