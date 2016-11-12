<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
    	$comment= new Comment();
    	$comment->comment=$request->comment;
    	$comment->save();

    	return back();
    }

    public function approval(Request $request)
    {

    	$comment= Comment::find($request->commentId);
    	$approveVal=$request->approve;
    	if($approveVal=='on'){
    		$approveVal=1;
    	}else{
    		$approveVal=0;
    	}

    	$comment->approve=$approveVal;
    	$comment->save();

    	return back();
    }



}
