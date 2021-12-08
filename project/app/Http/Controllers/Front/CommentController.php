<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

use App\Models\Reply;
class CommentController extends Controller
{
     // -------------------------------- PRODUCT COMMENT SECTION ----------------------------------------

     public function comment(Request $request)
     {
        
         $comment = new Comment;
         $input = $request->all();
         $comment->fill($input)->save();
         $data[0] = $comment->user->photo ? url('assets/images/user-image/'.$comment->user->photo):url('assets/images/noimage.png');
         $data[1] = $comment->user->name;
         $data[2] = $comment->created_at->diffForHumans();
         $data[3] = $comment->text;
         $data[5] = route('movie.comment.delete',$comment->id);
         $data[6] = route('movie.comment.edit',$comment->id);
         $data[7] = route('movie.reply',$comment->id);
         $data[8] = $comment->user->id;
         $newdata  =  '<li>';
         $newdata .= '<div class="single-comment comment-section">';
         $newdata .= '<div class="left-area">';
         $newdata .= '<img src="'. $data[0] .'" alt="">';
         $newdata .= '<h5 class="name">'. $data[1] .'</h5>';
         $newdata .= '<p class="date">'. $data[2] .'</p>';
         $newdata .= '</div>';
         $newdata .= '<div class="right-area">';
         $newdata .= '<div class="comment-body">';
         $newdata .= '<p>'. $data[3] .'</p>';
         $newdata .= '</div>';
         $newdata .= '<div class="comment-footer">';
         $newdata .= '<div class="links">';
         $newdata .= '<a href="javascript:;" class="comment-link reply mr-2"><i class="fas fa-reply "></i>'. __('Reply') .'</a>';
         $newdata .= '<a href="javascript:;" class="comment-link edit mr-2"><i class="fas fa-edit "></i>'. __('Edit') .'</a>';
         $newdata .= '<a href="javascript:;" data-href="'. $data[5] .'" class="comment-link comment-delete mr-2">';
         $newdata .= '<i class="fas fa-trash"></i>'. __('Delete') .'</a>';
         $newdata .= '</div>';
         $newdata .= '</div>';
         $newdata .= '</div>';
         $newdata .= '</div>';
         $newdata .= '<div class="replay-area edit-area d-none">';
         $newdata .= '<form class="update" action="'. $data[6] .'" method="POST">';
         $newdata .= csrf_field();
         $newdata .= '<textarea placeholder="'. __('Edit Your Comment') .'" name="text" required=""></textarea>';
         $newdata .= '<button type="submit">'. __('Submit') .'</button>';
         $newdata .= '<a href="javascript:;" class="remove">'. __('Cancel') .'</a>';
         $newdata .= '</form>';
         $newdata .= '</div>';
         $newdata .= '<div class="replay-area reply-reply-area d-none">';
         $newdata .= '<form class="reply-form" action="'. $data[7] .'" method="POST">';
         $newdata .= '<input type="hidden" name="user_id" value="'. $data[8] .'">';
         $newdata .= csrf_field();
         $newdata .= '<textarea placeholder="'. __('Write Your Reply') .'" name="text" required=""></textarea>';
         $newdata .= '<button type="submit">'. __('Submit') .'</button>';
         $newdata .= '<a href="javascript:;" class="remove">'. __('Cancel') .'</a>';
         $newdata .= '</form>';
         $newdata .= '</div>';
         $newdata .= '</li>';
         return response()->json($newdata);
     }

     public function commentedit(Request $request,$id)
     {
         $comment =Comment::findOrFail($id);
         $comment->text = $request->text;
         $comment->update();
         return response()->json($comment->text);
     }

     public function commentdelete($id)
     {
         $comment =Comment::findOrFail($id);
         if($comment->replies->count() > 0)
         {
             foreach ($comment->replies as $reply) {
                 $reply->delete();
             }
         }
         $comment->delete();
     }
 
 // -------------------------------- PRODUCT COMMENT SECTION ENDS ----------------------------------------

 // -------------------------------- PRODUCT REPLY SECTION ----------------------------------------

     public function reply(Request $request,$id)
     {
         $reply = new Reply;
         $input = $request->all();
         $input['comment_id'] = $id;
         $reply->fill($input)->save();
         $data[0] = $reply->user->photo ? url('assets/images/user-image/'.$reply->user->photo):url('assets/images/noimage.png');
         $data[1] = $reply->user->name;
         $data[2] = $reply->created_at->diffForHumans();
         $data[3] = $reply->text;
         $data[4] = route('movie.reply.delete',$reply->id);
         $data[5] = route('movie.reply.edit',$reply->id);
         $newdata  = '<div class="single-comment replay-review">';
         $newdata .= '<div class="left-area">';
         $newdata .= '<img src="'. $data[0] .'" alt="">';
         $newdata .= '<h5 class="name">'. $data[1] .'</h5>';
         $newdata .= '<p class="date">'. $data[2] .'</p>';
         $newdata .= '</div>';
         $newdata .= '<div class="right-area">';
         $newdata .= '<div class="comment-body">';
         $newdata .= '<p>'. $data[3] .'</p>';
         $newdata .= '</div>';
         $newdata .= '<div class="comment-footer">';
         $newdata .= '<div class="links">';
         $newdata .= '<a href="javascript:;" class="comment-link reply mr-2"><i class="fas fa-reply "></i>'. __('Reply') .'</a>';
         $newdata .= '<a href="javascript:;" class="comment-link edit mr-2"><i class="fas fa-edit "></i>'. __('Edit') .'</a>';
         $newdata .= '<a href="javascript:;" data-href="'. $data[4] .'" class="comment-link reply-delete mr-2">';
         $newdata .= '<i class="fas fa-trash"></i>'. __('Delete') .'</a>';
         $newdata .= '</div>';
         $newdata .= '</div>';
         $newdata .= '</div>';
         $newdata .= '</div>';
         $newdata .= '<div class="replay-area edit-area d-none">';
         $newdata .= '<form class="update" action="'. $data[5] .'" method="POST">';
         $newdata .= csrf_field();
         $newdata .= '<textarea placeholder="'. __('Edit Your Reply') .'" name="text" required=""></textarea>';
         $newdata .= '<button type="submit">'. __('Submit') .'</button>';
         $newdata .= '<a href="javascript:;" class="remove">'. __('Cancel') .'</a>';
         $newdata .= '</form>';
         $newdata .= '</div>';
         return response()->json($newdata);
     }

     public function replyedit(Request $request,$id)
     {
         $reply = Reply::findOrFail($id);
         $reply->text = $request->text;
         $reply->update();
         return response()->json($reply->text);
     }

     public function replydelete($id)
     {
         $reply =Reply::findOrFail($id);
         $reply->delete();
     }

 // -------------------------------- movie REPLY SECTION ENDS----------------------------------------
}
