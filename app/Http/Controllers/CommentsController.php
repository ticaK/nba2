<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CreateCommentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;





class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id){
        

        $comment = Comment::create([
            'team_id'=>$id,
            'user_id'=>Auth::user()->id,
            'content'=>$request->content     
        ]);
           
        if($comment->team){
            Mail::to($comment->team)->send(new CommentReceived(
                $comment->team, $comment
            ));
        }

        return redirect()->back();

    }
}