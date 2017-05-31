<?php

namespace App\Http\Controllers;

use DB;
use App\Comments;
use App\RequestPrint;
use Illuminate\Http\Request;

class CommentController extends Controller
{

   	public function addComment(Request $request){
   		//dd($request->all());
   		$comment = new Comments();
   		$comment->comment = $request->get('body');
   		$comment->request_id = $request->get('request_id');
   		$comment->user_id = \Auth::User()->id;
         if($request->get('parent_id')){
            $comment->parent_id = $request->get('parent_id');
         }
   		$comment->save();

   		return redirect ()->route('requestShow', ['id'=> $request->get('request_id')]); 

   	}

   	public function block($id, $commentId){

   		$comment = Comments::FindOrFail($commentId);
   		$comment->blocked = 1;
   		$comment->save();
         $this->blockChilds($comment);
   		 return redirect()->route('requestShow', ['id'=> $id]);
   	}

   	public function listBlock(){

   		$comments = DB::table('comments')->paginate(500);

        return view('blockedComments', compact('comments'));
   	}

   	public function unblock($id){
   		$comment = Comments::FindOrFail($id);
   		$comment->blocked = 0;
   		$comment->save();

   		return redirect()->route('showBlocked');
   	}

      public function blockChilds($comment){
         $comments = Comments::where('parent_id',$comment->id)->get();

         foreach($comments as $comment){
            $comment->blocked = 1;
            $comment->save();
         }
      }
}
