<?php

namespace App\helper;
use Image;

 class  Helper {

//------------ Impole data Function------------------//

public static function implode($value)
{
    if($value){
        return implode(',',$value);
    }else{
        return  '';
    }
    
}


// ------------------ Temp Clear -----------------------------//
public static function tempClear()
{
    $files = glob('assets/temp_video/*'); 
    foreach($files as $file){
        unlink($file);
    }
}

// ------------------ Temp Clear -----------------------------//

// -------------------- Make Slug -=------------------------//

public static function slug($slug)
{
    
    return $title = str_slug($slug, "-");
}
// -------------------- Make Slug end-=------------------------//

// -------------------- Image Insert----------------------//

public static function MakeImage($image,$location,$modelData)
{
    $name = time() . $image->getClientOriginalName();
    $location = $location . $name;
    Image::make($image)->resize(400,400)->save($location);
    $modelData->image()->create(['image' => $name]);
}

// -------------------- Image Insert----------------------//

// -------------------- Image Update --------------------//
public static function ImageUpdate($image,$location,$model,$size=null)
{
   
    if($model->image->image != null){
        if(file_exists($location.$model->image->image)){
            unlink($location.$model->image->image);
        }
    }


    $name = time() . $image->getClientOriginalName();
    $location = $location . $name;
    if($size == null){
        Image::make($image)->resize(400,400)->save($location);
    }else{
        Image::make($image)->resize($size[0],$size[1])->save($location);
    }
    
    $model->image()->update(['image' => $name]);
}

// -------------------- Image Update --------------------//


// -------------------- Image Null ----------------------//

public static function NullImage($model)
{
    $model->image()->create(['image' => null]);
}

// -------------------- Image Null ----------------------//



// -------------------- Another joint Delete ----------------//
public static function Deletes($model, $location)
{
    if($model->image->image != null){
        if(file_exists($location . $model->image->image)){
            unlink($location.$model->image->image);
            $model->delete();
        }
    }
    else{
        $model->delete();
    }
}
// -------------------- Another joint Delete ----------------//



// ------------------------TagFormat--------------------------//
public static function TagFormat($tag)
{
    $common_rep   = ["value", "{", "}", "[","]",":","\""];
    $tag = str_replace($common_rep, '', $tag);

    if (!empty($tag)) 
    {
       return $tag;  
          
    }else {

       return  null;
    }  
}
// ------------------------TagFormat--------------------------//


// --------------------- Make Video --------------------------//
public static function VideoUpload($files,$location)
{
    if($files['video_type'] == 'file'){
        $file = $files['video_name'];
        $name = $file->getClientOriginalName();
        $name = str_replace(' ' , '_',$name);
        $file->move($location,$name);
         return  $name;
    }else{
       return $files['video'];
    }
}

//  ---------------- Video Update -----------------------//
public static function VideoUpdate($files,$location,$model)
{
    $file = $files['video_name'];
    $name = $file->getClientOriginalName();
    $name = str_replace(' ' , '_',$name);

    if(file_exists(base_path('../'.$location.'/'.$model->video))){
        unlink(base_path('../'.$location.'/'.$model->video));
    }

    if($model->video_type == 'url'){
        if($files['video_type'] == 'file'){
            $file->move($location,$name);
            return  $name;
        }else{
        return $files['video'];
        }
    }else{
        if($files['video_type'] == 'file'){
            $file->move($location,$name);
            return  $name;
        }else{
            return $files['video'];
            }
        }
    }

// -------------- Video Processing ---------------------//
public static function ProcessingVideo($video,$previus_video)
    {

        if($previus_video){
            $is_video = explode('/',$previus_video);
            $filename  =  end($is_video);

             if(file_exists(base_path('../assets/temp_video/'.$filename ))){
                 unlink(base_path('../assets/temp_video/'.$filename ));
             }

            }

            $file = $video;
            $name = $file->getClientOriginalName();
            $name = str_replace(' ' , '_',$name);
            $file->move('assets/temp_video',$name);
            $path = asset('assets/temp_video/'.$name);
            return $path;
    }

    // -------------- Video Processing ---------------------//


}