<?php

namespace App\Http\Controllers;

use App\Comments;
use App\RequestPrint;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   	public function addComment(RequestPrint $requestPrint){
   		Comments::create([

   			'body' => request('body'),
   			'request_id' => $requestPrint->id
   			]);
   	}
}
