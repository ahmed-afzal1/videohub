<?php

namespace App\helper;

use App\Classes\IMDB;
use Image;
use App\Models\EmailTemplate;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Helper
{

//------------ Impole data Function------------------//

    public static function implode($value)
    {
        if ($value) {
            return implode(',', $value);
        } else {
            return '';
        }

    }

// ------------------ Temp Clear -----------------------------//
    public static function tempClear()
    {
        $files = glob('assets/temp_video/*');
        foreach ($files as $file) {
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

    public static function MakeImage($image, $location, $modelData)
    {
        $name = time() . $image->getClientOriginalName();
        $location = $location . $name;
        Image::make($image)->resize(400, 400)->save($location);
        $modelData->image()->create(['image' => $name]);
    }

// -------------------- Image Insert----------------------//

// -------------------- Image Update --------------------//
    public static function ImageUpdate($image, $location, $model, $size = null)
    {
        if ($model->image->image != null) {
            if (file_exists($location . $model->image->image)) {
                @unlink($location . $model->image->image);
            }
        }

        $name = time() . $image->getClientOriginalName();
        $location = $location . $name;
        if ($size == null) {
            Image::make($image)->resize(400, 400)->save($location);
        } else {
            Image::make($image)->resize($size[0], $size[1])->save($location);
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
        if ($model->image->image != null) {
            if (file_exists($location . $model->image->image)) {
                unlink($location . $model->image->image);
                $model->delete();
            }
        } else {
            $model->delete();
        }
    }
// -------------------- Another joint Delete ----------------//

// ------------------------TagFormat--------------------------//
    public static function TagFormat($tag)
    {
        $common_rep = ["value", "{", "}", "[", "]", ":", "\""];
        $tag = str_replace($common_rep, '', $tag);

        if (!empty($tag)) {
            return $tag;

        } else {

            return null;
        }
    }
// ------------------------TagFormat--------------------------//

// --------------------- Make Video --------------------------//
    public static function VideoUpload($files, $location)
    {
        if ($files['video_type'] == 'file') {
            $file = $files['video_name'];
            $name = $file->getClientOriginalName();
            $name = str_replace(' ', '_', $name);
            $file->move($location, $name);
            return $name;
        } else {
            return $files['video'];
        }
    }

//  ---------------- Video Update -----------------------//
    public static function VideoUpdate($files, $location, $model)
    {
        $file = $files['video_name'];
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '_', $name);

        if (file_exists(base_path('../' . $location . '/' . $model->video))) {
            unlink(base_path('../' . $location . '/' . $model->video));
        }

        if ($model->video_type == 'url') {
            if ($files['video_type'] == 'file') {
                $file->move($location, $name);
                return $name;
            } else {
                return $files['video'];
            }
        } else {
            if ($files['video_type'] == 'file') {
                $file->move($location, $name);
                return $name;
            } else {
                return $files['video'];
            }
        }
    }

// -------------- Video Processing ---------------------//
    public static function ProcessingVideo($video, $previus_video)
    {

        if ($previus_video) {
            $is_video = explode('/', $previus_video);
            $filename = end($is_video);

            if (file_exists(base_path('../assets/temp_video/' . $filename))) {
                unlink(base_path('../assets/temp_video/' . $filename));
            }

        }

        $file = $video;
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '_', $name);
        $file->move('assets/temp_video', $name);
        $path = asset('assets/temp_video/' . $name);
        return $path;
    }

    // -------------- Video Processing ---------------------//

    public static function GetIMDBRating($title)
    {
        $IMDB = new IMDB($title);
        if ($IMDB->isReady) {
            $rating = $IMDB->getRating();
        } else {
            $rating = null;
        }
        return $rating;
    }

    
public static function sendGeneralMail($data){
    $general = GeneralSetting::first();

    
    if ($general->email_method == 'php') {
        $headers = "From: $general->website_name <$general->from_email> \r\n";
        $headers .= "Reply-To: $general->website_name <$general->from_email> \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        @mail($data['email'], $data['subject'], $data['message'], $headers);
    }
    else {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = $general->smtp_config->smtp_host;
            $mail->SMTPAuth   = true;
            $mail->Username   = $general->smtp_config->smtp_username;
            $mail->Password   = $general->smtp_config->smtp_password;
            if ($general->smtp_config->smtp_encryption == 'ssl') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } else {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            }
            $mail->Port       = $general->smtp_config->smtp_port;
            $mail->CharSet = 'UTF-8';
            $mail->setFrom($general->from_email, $general->website_name);
            $mail->addAddress($data['email'], $data['name']);
            $mail->addReplyTo($general->from_email, $general->website_name);
            $mail->isHTML(true);
            $mail->Subject = $data['subject'];
            $mail->Body    = $data['message'];
            $mail->send();
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }
}

public static function variableReplacer($code, $value, $template)
{
    return str_replace($code, $value, $template);
}

public static function sendMail($key, array $data, $user)
{

    $general = GeneralSetting::first();

    $template =  EmailTemplate::where('name', $key)->first();

    $message = self::variableReplacer('{username}', $user->username, $template->template);
    $message = self::variableReplacer('{sent_from}', @$general->website_name, $message);

    foreach ($data as $key => $value) {
        $message = self::variableReplacer("{" . $key . "}", $value, $message);
    }

    if ($general->email_method == 'php') {
        $headers = "From: $general->website_name <$general->from_email> \r\n";
        $headers .= "Reply-To: $general->website_name <$general->from_email> \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";
        @mail($user->email, $template->subject, $message, $headers);
    } else {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = $general->smtp_config->smtp_host;
            $mail->SMTPAuth   = true;
            $mail->Username   = $general->smtp_config->smtp_username;
            $mail->Password   = $general->smtp_config->smtp_password;
            if ($general->smtp_config->smtp_encryption == 'ssl') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } else {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            }
            $mail->Port       = $general->smtp_config->smtp_port;
            $mail->CharSet = 'UTF-8';
            $mail->setFrom($general->from_email, $general->website_name);
            $mail->addAddress($user->email, $user->username);
            $mail->addReplyTo($general->from_email, $general->website_name);
            $mail->isHTML(true);
            $mail->Subject = $template->subject;
            $mail->Body    = $message;
            $mail->send();
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }
}
}
