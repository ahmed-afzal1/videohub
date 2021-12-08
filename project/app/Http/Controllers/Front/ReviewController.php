<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Favarite;
use App\Models\Review;
use Auth;
use App\Classes\IMDB;
use Carbon\Carbon;


class ReviewController extends Controller
{
    public function GetReview($slug)
    {
        $data = Movie::where('slug',$slug)->first();
        $favariteValues = Favarite::where('video_id',$data->id)->get();
        if(Auth::user()){
            $isFavarite = Favarite::where('video_id',$data->id)->where('user_id',Auth::user()->id)->exists();
        }else{
            $isFavarite = false;  
        }

                $IMDB = new IMDB($data->title);
            if ($IMDB->isReady) {
                $rating = $IMDB->getRating();
            } else {
                $rating = '';
            }
      
        $reviews = Review::where('video_id',$data->id)->get();
      


// -------------------------- COUNT YEARS WISE REVIEW -----------------------------//

// All user review ---------------------------//
        $users = null;
        foreach ($data->videoReview as $key => $value) {
            $users[] = $value->user; 
        }


    // ------- reviews ---------//
        $infoAllusers['user18'] = array();
        $infoAllusers['user18_29'] = array();
        $infoAllusers['user30_50'] = array();
        $infoAllusers['user50plus'] = array();
 // ------- reviews ---------//

 // ------- avarage variable ---------//
        $infoAllusers['user18review'] = 0;
        $infoAllusers['user18_29review'] = 0;
        $infoAllusers['user30_50review'] = 0;
        $infoAllusers['user50plusreview'] = 0;
 // ------- avarage variable ---------//


        foreach ($users as $key => $user) {
            $x = Carbon::parse( $user->birthday)->diff(\Carbon\Carbon::now())->format('%y');
          if($x <= '18'){
            $infoAllusers['user18'][] = Review::where('user_id',$user->id)->first();
            $infoAllusers['user18review'] += Review::where('user_id',$user->id)->first()->review_value;
          }
    
          elseif($x >18 && $x <= 30){
            $infoAllusers['user18_29'][] = Review::where('user_id',$user->id)->first();
            $infoAllusers['user18_29review'] += Review::where('user_id',$user->id)->first()->review_value;
          }
    
          elseif($x > 30 && $x <= 50){
            $infoAllusers['user30_50'][] = App\Models\Review::where('user_id',$user->id)->first();
            $infoAllusers['user30_50review'] += Review::where('user_id',$user->id)->first()->review_value;
          }
    
          elseif($x > 50){
            $infoAllusers['user50plus'][] = Review::where('user_id',$user->id)->first();
            $infoAllusers['user50plusreview'] += Review::where('user_id',$user->id)->first()->review_value;
          }
      }
       
    
    //   -------- count value ----------//
      $infoAllusers['user18count'] = count($infoAllusers['user18']);
      $infoAllusers['user18_30count'] = count($infoAllusers['user18_29']);
      $infoAllusers['user30_50count'] = count($infoAllusers['user30_50']);
      $infoAllusers['user_50pluscount'] = count($infoAllusers['user50plus']);
   
    //   -------- count value ----------//
    //   -------- agarage value ----------//

if($infoAllusers['user18review'] > 0 && $infoAllusers['user18count'] > 0){
    $infoAllusers['user18avg'] = round($infoAllusers['user18review'] / $infoAllusers['user18count'] , 2);
}else{
    $infoAllusers['user18avg'] = '0.00';
}


if($infoAllusers['user18_29review'] > 0 && $infoAllusers['user18_30count'] > 0){
    $infoAllusers['user18_30avg'] = round($infoAllusers['user18_29review'] / $infoAllusers['user18_30count'] , 2);
}else{
    $infoAllusers['user18_30avg'] = '0.00';
}


if($infoAllusers['user30_50review'] > 0 && $infoAllusers['user30_50count'] > 0){
    $infoAllusers['user30_50avg'] = round($infoAllusers['user30_50review'] / $infoAllusers['user30_50count'] , 2);
}else{
    $infoAllusers['user30_50avg'] = '0.00';
}


if($infoAllusers['user50plusreview'] > 0 && $infoAllusers['user_50pluscount'] > 0){
    $infoAllusers['user50plusavg'] = round($infoAllusers['user50plusreview'] / $infoAllusers['user_50pluscount'] , 2);
}else{
    $infoAllusers['user50plusavg'] = '0.00';
}

    //   -------- agarage value ----------//
//------------- COUNT YEARS WISE REVIEW -----------------------------//



//  Gander wise reviews------------------------------------//

    $ganderusersreviews = null;
        foreach ($data->videoReview as $key => $value) {
            $ganderusersreviews[] = $value->user; 
        }


    // ------- reviews ---------//
        $infoGander['gander_user18'] = array();
        $infoGander['gander_user18_29'] = array();
        $infoGander['gander_user30_50'] = array();
        $infoGander['gander_user50plus'] = array();
 // ------- reviews ---gander_------//

 // ------- avarage vargander_iable ---------//
        $infoGander['gander_user18review'] = 0;
        $infoGander['gander_user18_29review'] = 0;
        $infoGander['gander_user30_50review'] = 0;
        $infoGander['gander_user50plusreview'] = 0;
 // ------- avarage variable ---------//


        foreach ($ganderusersreviews as $key => $gander_user) {
            $x = Carbon::parse($gander_user->birthday)->diff(\Carbon\Carbon::now())->format('%y');
          if($x <= '18' && $gander_user->gander == 'Male'){
            $infoGander['gander_user18'][] = Review::where('user_id',$gander_user->id)->first();
            $infoGander['gander_user18review'] += Review::where('user_id',$gander_user->id)->first()->review_value;
          }
    
          elseif($x >18 && $x <= 30 && $gander_user->gander == 'Male'){
            $infoGander['gander_user18_29'][] = Review::where('user_id',$gander_user->id)->first();
            $infoGander['gander_user18_29review'] += Review::where('user_id',$gander_user->id)->first()->review_value;
          }
    
          elseif($x > 30 && $x <= 50 && $gander_user->gander == 'Male'){
            $infoGander['gander_user30_50'][] = App\Models\Review::where('user_id',$gander_user->id)->first();
            $infoGander['gander_user30_50review'] += Review::where('user_id',$gander_user->id)->first()->review_value;
          }
    
          elseif($x > 50 && $gander_user->gander == 'Male'){
            $infoGander['gander_user50plus'][] = Review::where('user_id',$gander_user->id)->first();
            $infoGander['gander_user50plusreview'] += Review::where('user_id',$gander_user->id)->first()->review_value;
          }
      }
       
    
    //   -------- count value ----------//
      $infoGander['gander_user18count'] = count($infoGander['gander_user18']);
      $infoGander['gander_user18_30count'] = count($infoGander['gander_user18_29']);
      $infoGander['gander_user30_50count'] = count($infoGander['gander_user30_50']);
      $infoGander['gander_user_50pluscount'] = count($infoGander['gander_user50plus']);
   
    //   -------- count value ----------//
    //   -------- avarage value ----------//

    if($infoGander['gander_user18review'] > 0 && $infoGander['gander_user18count'] > 0){
        $infoGander['gander_user18avg'] = round($infoGander['gander_user18review'] / $infoGander['gander_user18count'] , 2);
    }else{
        $infoGander['gander_user18avg'] = '0.00';
    }


    if($infoGander['gander_user18_29review'] > 0 && $infoGander['gander_user18_30count'] > 0){
        $infoGander['gander_user18_30avg'] = round($infoGander['gander_user18_29review'] / $infoGander['gander_user18_30count'] , 2);
    }else{
        $infoGander['gander_user18_30avg'] = '0.00';
    }


    if($infoGander['gander_user30_50review'] > 0 && $infoGander['gander_user30_50count'] > 0){
        $infoGander['gander_user30_50avg'] = round($infoGander['gander_user30_50review'] / $infoGander['gander_user30_50count'] , 2);
    }else{
        $infoGander['gander_user30_50avg'] = '0.00';
    }


    if($infoGander['gander_user50plusreview'] > 0 && $infoGander['gander_user_50pluscount'] > 0){
        $infoGander['gander_user50plusavg'] = round($infoGander['gander_user50plusreview'] / $infoGander['gander_user_50pluscount'] , 2);
    }else{
        $infoGander['gander_user50plusavg'] = '0.00';
    }

//  Gander wise reviews------------------------------------//


// Famale ----------------------------------------------//

$female_ganderusersreviews = null;
        foreach ($data->videoReview as $key => $value) {
            $female_ganderusersreviews[] = $value->user; 
        }

    // ------- reviews ---------//
        $infoFemale['female_gander_user18'] = array();
        $infoFemale['female_gander_user18_29'] = array();
        $infoFemale['female_gander_user30_50'] = array();
        $infoFemale['female_gander_user50plus'] = array();
 // ------- reviews ---female_gander_------//

 // ------- avarage varfemale_gander_iable ---------//
        $infoFemale['female_gander_user18review'] = 0;
        $infoFemale['female_gander_user18_29review'] = 0;
        $infoFemale['female_gander_user30_50review'] = 0;
        $infoFemale['female_gander_user50plusreview'] = 0;
 // ------- avarage variable ---------//


        foreach ($female_ganderusersreviews as $key => $female_gander_user) {
            $x = Carbon::parse( $female_gander_user->birthday)->diff(\Carbon\Carbon::now())->format('%y');
          if($x <= '18' && $female_gander_user->gander == 'Female'){
            $infoFemale['female_gander_user18'][] = Review::where('user_id',$female_gander_user->id)->first();
            $infoFemale['female_gander_user18review'] += Review::where('user_id',$female_gander_user->id)->first()->review_value;
          }
    
          elseif($x >18 && $x <= 30 && $female_gander_user->female_gander == 'Male'){
            $infoFemale['female_gander_user18_29'][] = Review::where('user_id',$female_gander_user->id)->first();
            $infoFemale['female_gander_user18_29review'] += Review::where('user_id',$female_gander_user->id)->first()->review_value;
          }
    
          elseif($x > 30 && $x <= 50 && $female_gander_user->female_gander == 'Male'){
            $infoFemale['female_gander_user30_50'][] = App\Models\Review::where('user_id',$female_gander_user->id)->first();
            $infoFemale['female_gander_user30_50review'] += Review::where('user_id',$female_gander_user->id)->first()->review_value;
          }
    
          elseif($x > 50 && $female_gander_user->female_gander == 'Male'){
            $infoFemale['female_gander_user50plus'][] = Review::where('user_id',$female_gander_user->id)->first();
            $infoFemale['female_gander_user50plusreview'] += Review::where('user_id',$female_gander_user->id)->first()->review_value;
          }
      }
       
    
    //   -------- count value ----------//
      $infoFemale['female_gander_user18count'] = count($infoFemale['female_gander_user18']);
      $infoFemale['female_gander_user18_30count'] = count($infoFemale['female_gander_user18_29']);
      $infoFemale['female_gander_user30_50count'] = count($infoFemale['female_gander_user30_50']);
      $infoFemale['female_gander_user_50pluscount'] = count($infoFemale['female_gander_user50plus']);
   
    //   -------- count value ----------//
    //   -------- agarage value ----------//

if($infoFemale['female_gander_user18review'] > 0 && $infoFemale['female_gander_user18count'] > 0){
    $infoFemale['female_gander_user18avg'] = floatval(round($infoFemale['female_gander_user18review'] / $infoFemale['female_gander_user18count'] , 2));
}else{
    $infoFemale['female_gander_user18avg'] = '0.00';
}


if($infoFemale['female_gander_user18_29review'] > 0 && $infoFemale['female_gander_user18_30count'] > 0){
    $infoFemale['female_gander_user18_30avg'] = round($infoFemale['female_gander_user18_29review'] / $infoFemale['female_gander_user18_30count'] , 2);
}else{
    $infoFemale['female_gander_user18_30avg'] = '0.00';
}


if($infoFemale['female_gander_user30_50review'] > 0 && $infoFemale['female_gander_user30_50count'] > 0){
    $infoFemale['female_gander_user30_50avg'] = round($infoFemale['female_gander_user30_50review'] / $infoFemale['female_gander_user30_50count'] , 2);
}else{
    $infoFemale['female_gander_user30_50avg'] = '0.00';
}


if($infoFemale['female_gander_user50plusreview'] > 0 && $infoFemale['female_gander_user_50pluscount'] > 0){
    $infoFemale['female_gander_user50plusavg'] = round($infoFemale['female_gander_user50plusreview'] / $infoFemale['female_gander_user_50pluscount'] , 2);
}else{
    $infoFemale['female_gander_user50plusavg'] = '0.00';
}


// Famale ----------------------------------------------//


         return view('front.review_details',compact('data','favariteValues','reviews','isFavarite','rating','infoAllusers','infoFemale','infoGander'));
    }
}
