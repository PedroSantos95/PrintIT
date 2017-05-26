<?php

namespace App\Http\Controllers;

use App\Comments;
use App\RequestPrint;
use Illuminate\Http\Request;

class CommentController extends Controller
{

   	public function addComment(Request $request){
   		//dd($request->all());
   		$comment = new Comments();
   		$comment->comment = $request->get('body');
   		$comment->request_id == $request->get('request_id');
   		$comment->save();

   	}
}
