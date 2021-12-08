<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Classes\IMDB;
use App\Models\Genre;
use App\Models\VideoLanguage;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\SportsVideo;
use App\Models\Favarite;
use App\Models\Review;
use App\Models\CastCrew;
use App\Models\Subscriber;
use App\Models\TvShow;
use App\Models\SubscriptionPlan;
use App\Models\Page;
use App\Models\Generalsetting;
use Auth;
use DB;

class FrontendController extends Controller
{
    public function Index()
    {
        return view('front.index');
        
        // $newMovies      = Movie::where('heighlight','like', '%new%')->get();
        // $oldMovies      = Movie::where('heighlight','like', '%old%')->get();
        // $topMovies      = Movie::where('heighlight','like', '%top%')->get();
        // $trendingMovies = Movie::where('heighlight','like', '%trending%')->get();
        // $recentMovies   = Movie::where('heighlight','like', '%recent%')->get();
        // $populerShows   = TvShow::where('status',1)->get();
        // $genres         = Genre::where('status',1)->get();
        // $languages      = VideoLanguage::where('status',1)->get();
        // $sportsVideos   = SportsVideo::where('status',1)->orderby('id','desc')->take(12)->get();

        // return view('front.index',compact('newMovies','oldMovies','topMovies','trendingMovies','recentMovies','populerShows','genres','languages','sportsVideos'));
    }



    // ------------ Movie Search ---------------------//

 
    public function MovieDetails()
    { 
        // $data = Movie::where('slug',$slug)->first();
        // $favariteValues = Favarite::where('video_id',$data->id)->get();
        // if(Auth::user()){
        //     $isFavarite = Favarite::where('video_id',$data->id)->where('user_id',Auth::user()->id)->exists();
        // }else{
        //     $isFavarite = false;  
        // }

        //         $IMDB = new IMDB($data->title);
        //     if ($IMDB->isReady) {
        //         $rating = $IMDB->getRating();
        //     } else {
        //         $rating = null;
        //     }
      
        // $reviews = Review::where('video_id',$data->id)->get();
        // $topMovies = Movie::where('heighlight','like', '%top%')->orderby('id','desc')->take(4)->get();
        // ,compact('data','topMovies','reviews','favariteValues','isFavarite','rating')

        return view('front.movieDetails');
    }


    public function pages($slug)
    {
       $data = Page::where('slug',$slug)->first();
       return view('front.page',compact('data'));
    }

    public function movies(){
        return view('front.movies');
    }


    public function MovieShow($data)
    {
        
        $data = explode('-',$data);
        $id = $data[0];
        $type = $data[1];

        if($type == 'language'){
            $language = VideoLanguage::where('name',$id)->first()->id;
            $movies  = Movie::where('language_id',$language)->where('status',1)->get();
            return view('front.show_movies',compact('movies'));
        }
        
        elseif($type == 'genre'){
            $genre = Genre::where('slug',$id)->first()->id;
            $movies = Movie::where('genre_id','like', '%'.$genre.'%')->where('status',1)->get();
            return view('front.show_movies',compact('movies'));
        }

        elseif($type == 'date'){
            $date  = Movie::where('slug',$id)->first()->relase_date; 
            $date = date('Y', strtotime($date));
            $movies = Movie::where('relase_date','like', '%'.$date.'%')->where('status',1)->get();
            return view('front.show_movies',compact('movies'));
        }
    }

    public function CostCrewDetails($id)
    {
        $cost_crew_details = CastCrew::where('name',$id)->first();
        $data = Movie::where('producer','like', '%'.$cost_crew_details->id.'%')->orwhere('directors','like', '%'.$cost_crew_details->id.'%')->orwhere('cast','like', '%'.$cost_crew_details->id.'%')->where('status',1)->get();
        return view('front.cast_crew_details',compact('data','cost_crew_details'));
    }


    public function genrewiseMovie($slug)
    {
       
        $genre = Genre::where('slug',$slug)->first()->id;
        $genre_wise_movies = Movie::where('genre_id','like', '%'.$genre.'%')->get();
        return view('front.genrewise_movie',compact('genre_wise_movies'));
    }


    public function CostCrewMovie($data)
    {
        
        $data = explode(',',$data);
        $id = $data[0];
        $type = $data[1];

       

        if($type== 'Producer'){
            $movies = Movie::with('image')->where('status',1)->where('producer','like', '%'.$id.'%')->paginate(8);
        }elseif($type == 'Derector'){
          $movies =  Movie::with('image')->where('status',1)->where('directors','like', '%'.$id.'%')->paginate(8);
        }elseif($type == '0'){
            $movies = Movie::where('producer','like', '%'.$id.'%')->orwhere('directors','like', '%'.$id.'%')->orwhere('cast','like', '%'.$id.'%')->where('status',1)->paginate(4);
        }
        
        else{
          $movies =  Movie::with('image')->where('status',1)->where('cast','like', '%'.$id.'%')->paginate(8);
        }

        return view('front.load.movie',compact('movies'));
        
    }



    public function Contact()
    {
        $this->code_image();
        $ps =  DB::table('pagesettings')->where('id','=',1)->first();
        return view('front.contact',compact('ps'));
    }


    public function faq()
	{  
        // $faqs =  DB::table('faqs')->orderBy('id','desc')->get();
		return view('front.faq');
    }
    

        public function subscribe(Request $request)
        {
            $gs = DB::table('generalsettings')->find(1);
            $subs = Subscriber::where('email','=',$request->email)->first();
            

            if(isset($subs)){
                return response()->json(array('errors' => __('This email has already been taken.')));           
            }


            $subscribe = new Subscriber;
            $subscribe->fill($request->all());
            $subscribe->save();
            return response()->json(__($gs->subscribe_success));   
        }
 


    public function contactemail(Request $request)
        {
            $value = session('captcha_string');
            if ($request->codes != $value){
                return response()->json(array('errors' => [ 0 => __('Please enter Correct Capcha Code.') ]));    
            }

            $ps = DB::table('pagesettings')->where('id','=',1)->first();
            $subject = "Email From Of ".$request->name;
            $gs = Generalsetting::findOrFail(1);
            $to = $request->to;
            $name = $request->name;
            $phone = $request->phone;
            $from = $request->email;
            $msg = "Name: ".$name."\nEmail: ".$from."\nPhone: ".$request->phone."\nMessage: ".$request->text;
            if($gs->is_smtp)
            {
            $data = [
                'to' => $to,
                'subject' => $subject,
                'body' => $msg,
            ];

            $mailer = new GeniusMailer();
            $mailer->sendCustomMail($data);
            }
            else
            {
            $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
            mail($to,$subject,$msg,$headers);
            }
            // Login Section Ends

            // Redirect Section
            return response()->json(__('Success! Thanks for contacting us, we will get back to you shortly.'));    
        }


        // -------------------------------- BLOG SECTION ----------------------------------------

	public function blog(Request $request)
	{
        
        $tags = null;
        $tagz = '';
        $name = Blog::pluck('tags')->toArray();
        foreach($name as $nm)
        {
            $tagz .= $nm.',';
        }
        $tags = array_unique(explode(',',$tagz));

        $archives= Blog::orderBy('created_at','desc')->get()->groupBy(function($item){ return $item->created_at->format('F Y'); })->take(5)->toArray();
        $name = Blog::pluck('tags')->toArray();
        foreach($name as $nm)
        {
            $tagz .= $nm.',';
        }
        $tags = array_unique(explode(',',$tagz));

        $archives= Blog::orderBy('created_at','desc')->get()->groupBy(function($item){ return $item->created_at->format('F Y'); })->take(5)->toArray();
		$blogs = Blog::orderBy('created_at','desc')->paginate(6);
        $bcats = BlogCategory::where('status',1)->get();
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs'));
            }
		return view('front.blog',compact('blogs','bcats','tags','archives'));
	}



    public function blogcategory(Request $request, $slug)
    {
        $tags = null;
        $tagz = '';
        $name = Blog::pluck('tags')->toArray();
        foreach($name as $nm)
        {
            $tagz .= $nm.',';
        }
        $tags = array_unique(explode(',',$tagz));

        $archives= Blog::orderBy('created_at','desc')->get()->groupBy(function($item){ return $item->created_at->format('F Y'); })->take(5)->toArray();
        $bcat = BlogCategory::where('slug', '=', str_replace(' ', '-', $slug))->first();
        $blogs = $bcat->blogs()->orderBy('created_at','desc')->paginate(6);
        $bcats = BlogCategory::where('status',1)->get();
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs'));
            }
        return view('front.blog',compact('bcat','blogs','bcats','tags','archives'));
    }



    public function blogtags(Request $request, $slug)
    {
        $tags = null;
        $tagz = '';
        $name = Blog::pluck('tags')->toArray();
        foreach($name as $nm)
        {
            $tagz .= $nm.',';
        }
        $tags = array_unique(explode(',',$tagz));

        $archives= Blog::orderBy('created_at','desc')->get()->groupBy(function($item){ return $item->created_at->format('F Y'); })->take(5)->toArray();        
        $bcats = BlogCategory::where('status',1)->get();
        $blogs = Blog::where('tags', 'like', '%' . $slug . '%')->paginate(6);
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs'));
            }
        return view('front.blog',compact('blogs','slug','bcats','tags','archives'));
    }



    public function blogsearch(Request $request)
    {
        $tags = null;
        $tagz = '';
         $name = Blog::pluck('tags')->toArray();
        foreach($name as $nm)
        {
            $tagz .= $nm.',';
        }
        $tags = array_unique(explode(',',$tagz));

        $archives= Blog::orderBy('created_at','desc')->get()->groupBy(function($item){ return $item->created_at->format('F Y'); })->take(5)->toArray();       
        $bcats =BlogCategory::where('status',1)->get();
        $search = $request->search;
        $blogs = Blog::where('title', 'like', '%' . $search . '%')->orWhere('details', 'like', '%' . $search . '%')->paginate(6);
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs'));
            }
        return view('front.blog',compact('blogs','search','bcats','tags','archives'));
    }




    public function blogarchive(Request $request,$slug)
    {
        $tags = null;
        $tagz = '';
        $name = Blog::pluck('tags')->toArray();
        foreach($name as $nm)
        {
            $tagz .= $nm.',';
        }
        $tags = array_unique(explode(',',$tagz));

        $archives= Blog::orderBy('created_at','desc')->get()->groupBy(function($item){ return $item->created_at->format('F Y'); })->take(5)->toArray();        
        $bcats = BlogCategory::where('status',1)->get();
        $date = \Carbon\Carbon::parse($slug)->format('Y-m');
        $blogs = Blog::where('created_at', 'like', '%' . $date . '%')->paginate(6);
            if($request->ajax()){
                return view('front.pagination.blog',compact('blogs'));
            }
        return view('front.blog',compact('blogs','date','bcats','tags','archives'));
    }

    public function blogshow($slug)
    {
        $tags = null;
        $tagz = '';
        $bcats = BlogCategory::where('status',1)->get();
        $blog = Blog::where('slug',$slug)->first();
        $blog->views = $blog->views + 1;
        $blog->update();
        $name = Blog::pluck('tags')->toArray();
        foreach($name as $nm)
        {
            $tagz .= $nm.',';
        }
        $tags = array_unique(explode(',',$tagz));

        $archives= Blog::orderBy('created_at','desc')->get()->groupBy(function($item){ return $item->created_at->format('F Y'); })->take(5)->toArray();
        $blog_meta_tag = $blog->meta_tag;
        $blog_meta_description = $blog->meta_description;
        return view('front.blogshow',compact('blog','bcats','tags','archives','blog_meta_tag','blog_meta_description'));
    }


// -------------------------------- BLOG SECTION ENDS----------------------------------------

// ***************************** Search Movie ******************************************* //

public function SearchMovieData($movie)
{

    $data = Movie::with('image')->where('title', 'like', '%' .$movie . '%')->get();

    if(Auth::user() && Auth::user()->plan){
        $data = Movie::with('image')->where('title', 'like', '%' .$movie . '%')->get();
    }else{
        $data = Movie::with('image')->where('title', 'like', '%' .$movie . '%')->where('access','free')->get();
    }



    if($data->count() > 0){
        return response()->json(['data' => $data]);
    }else{
        return response()->json(['data' => null]);
    }
    
}
// ***************************** Search Movie ******************************************* //


public function SubscriptionPlanPayment($id)
{
    if(!Auth::user()){
        return redirect(route('user.login'));
    }
    $data = SubscriptionPlan::findOrFail($id);
    return view('front.subscription_plan_payment',compact('data'));
}



public function GetReview($review)
{
    $data = new Review;

    $reviewData = explode(',',$review);
    $review = $reviewData[0];
    $video_id = $reviewData[1];

    if($data->where('user_id',Auth::user()->id)->where('video_id',$video_id)->exists()){
        $update = Review::where('user_id',Auth::user()->id)->update([
            'review_value' => $review,
        ]);
    }else{
        $data->create([
            'user_id' => Auth::user()->id,
            'review_value' => $review,
            'video_id' => $video_id
        ]);
    }
     return response()->json(['status'=> 200,'mgs'=>$review.__(' Star Review Submit Successfully.')]);
}


    public function plan()
    {
    //    $plans =  SubscriptionPlan::where('status',1)->get();
        return view('front.plan');
    }


    public function GetFavarite($movie_id)
    {
        $data = Favarite::where('user_id',Auth::user()->id)->where('video_id',$movie_id)->exists();

        if($data){
            Favarite::where('user_id',Auth::user()->id)->where('video_id',$movie_id)->delete();
            $mgs = __('Movie has been remove to Favorite List');
            return response()->json($mgs);
        }else{
            Favarite::where('user_id',Auth::user()->id)->where('video_id',$movie_id)->insert([
                'user_id' => Auth::user()->id,
                'video_id' => $movie_id
            ]);

            $mgs = __('Movie has been added to Favorite List');
            return response()->json($mgs);
        }
    }






    // ----------------------------  Refresh Capcha Code----------------------------------//
      // Refresh Capcha Code
      public function refresh_code(){
        $this->code_image();
        return "done";
    }

    // Capcha Code Image
    private function  code_image()
    {
        $image = imagecreatetruecolor(200, 50);
        $background_color = imagecolorallocate($image, 255, 255, 255);
        imagefilledrectangle($image,0,0,200,50,$background_color);
        $pixel = imagecolorallocate($image, 0,0,255);
        for($i=0;$i<500;$i++)
        {
            imagesetpixel($image,rand()%200,rand()%50,$pixel);
        }

        $font = base_path('../assets/front/fonts/NotoSans-Bold.ttf');
     
        $allowed_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $length = strlen($allowed_letters);
        $letter = $allowed_letters[rand(0, $length-1)];
        $word='';
        //$text_color = imagecolorallocate($image, 8, 186, 239);
        $text_color = imagecolorallocate($image, 0, 0, 0);
        $cap_length=6;// No. of character in image
        for ($i = 0; $i< $cap_length;$i++)
        {
            $letter = $allowed_letters[rand(0, $length-1)];
            imagettftext($image, 25, 1, 35+($i*25), 35, $text_color, $font, $letter);
            $word.=$letter;
        }
        $pixels = imagecolorallocate($image, 8, 186, 239);
        for($i=0;$i<500;$i++)
        {
            imagesetpixel($image,rand()%200,rand()%50,$pixels);
        }
        session(['captcha_string' => $word]);
        imagepng($image, base_path('../assets/images/capcha_code.png'));
}



}



