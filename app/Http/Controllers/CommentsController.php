<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CreateCommentRequest;
use Illuminate\Support\Facades\Auth;




class CommentsController extends Controller
{
    public function store(CreateCommentRequest $request, $id){
        
        $comment = Comment::create([
            'team_id'=>$id,
            'user_id'=>Auth::user()->id,
            'content'=>$request->content     
        ]);
 
        return redirect()->back();
    }
}