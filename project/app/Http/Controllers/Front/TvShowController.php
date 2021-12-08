<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TvSession;
use App\Models\VideoLanguage;
use App\Models\Genre;
use App\Models\SportsCategory;
use App\Models\Favarite;
use App\Models\Review;
use App\Models\SportsVideo;
use Auth;
use App\Models\Movie;
use App\Models\TvShow;
use App\Classes\IMDB;
use DB;

class TvShowController extends Controller
{
   public function tvshowView($slug)
   {
       $data = TvShow::where('slug',$slug)->where('status',1)->first();
       return view('front.sessionview',compact('data'));
   }


   public function SessionView($show,$session)
   {
       $tvshow = TvShow::where('slug',$show)->first();
       
       $data = TvSession::where('slug',$session)->where('show_id',$tvshow->id)->first();
       return view('front.episodeview',compact('data'));
   }


   public function Language_Genre ($types)
   {
      if($types== 'genre'){
          $data = Genre::where('status',1)->get();
          $type = 'Genre';

      }else{
          $data = VideoLanguage::where('status',1)->get();
          $type = 'Language';
      }

      return view('front.lang_genre_view',compact('data','type'));
   }


   public function searching(Request $request)
   {    
   
    $array['genre'] = $request->genre_id;
    $array['language'] = $request->language_id;
    $array['search'] = $request->rating;
    $array['rating'] = $request->search;

    $genres          = Genre::where('status',1)->get();
    $languages       = VideoLanguage::where('status',1)->get();


    
        
      
      $movies = Movie::whereStatus(1);
      if(!empty($request->language_id)){
        $movies = $movies->where('language_id',$request->language_id);
      }
      if(!empty($request->genre_id)){
        $movies = $movies->where('genre_id','like','%'.$request->genre_id.'%');
      }
      if(!empty($request->search)){
        $movies = $movies->where('title','like','%'.$request->search.'%');
      }
     
    if(!empty($request->rating)){
        $value = [];
        for($i = (int)$request->rating; $i <= 10; $i++){
            $value[] = $i;
        }
            $movies->whereHas('videoReview', function($q) use ($value){
                $q->whereIn('review_value', $value);
            });   
    }
    $movies = $movies->paginate(8);

   return view('front.search_view',compact('movies','genres','languages','array'));

   }


   public function AjaxSearch($languages,$genre,$search,$rating,$type)
   {
       if($languages != 0){
           $languages = $languages;
       }else{
        $languages = null;
       }

       if($genre != 0){
           $genre = $genre;
       }else{
        $genre = null;
       }

       if($rating != 0){
           $rating = $rating;
       }else{
        $rating = null;
       }
      

       if($type != '0'){
           $type = $type;
       }else{
           $type = null;
       }
      

       if($search != 'notvalid'){
           $search = $search;
       }else{
        $search = null;
       }

       $movies = Movie::whereStatus(1);
      if(!empty($languages)){
        $movies = $movies->where('language_id',$languages);
      }
      
      if(!empty($genre)){
        $movies = $movies->where('genre_id','like','%'.$genre.'%');
      }
      
      if(!empty($search)){
        $movies = $movies->where('title','like','%'.$search.'%');
      }
     
    if(!empty($rating)){
        $value = [];
        for($i = (int)$rating; $i <= 10; $i++){
            $value[] = $i;
        }
            $movies->whereHas('videoReview', function($q) use ($value){
                $q->whereIn('review_value', $value);
            });   
    }


    if(!empty($type)){
        $movies->where('access',$type);
    }

    $movies = $movies->with('image')->paginate(2);

    if(Auth::user()){
       if(Auth::user()->plan->count() > 0){
        if(Auth::user()->planTime()){
            $status = 's_valid';
        }else{
            $status = 's_unvalid';
        }
       }else{
        $status = 's_unvalid';
       }
    }else{
        $status = 'auth';
    }
    return view('front.load.movie',compact('movies','status'));
   }


   public function ViewSportVideo($slug)
   {
        $data =  SportsVideo::where('slug',$slug)->first();
        $related_videos = SportsVideo::where('sports_category_id',$data->sports_category_id)->where('status',1)->where('id','!=',$data->id)->take(8)->get();
        return view('front.sport_view',compact('data','related_videos'));
   }

   public function CategoryWiseVideo($slug)
   {
        $cat = SportsCategory::where('slug',$slug)->first();
        $data = SportsVideo::where('sports_category_id',$cat->id)->where('status',1)->get();
        return view('front.sports_category',compact('data'));
   }
}
