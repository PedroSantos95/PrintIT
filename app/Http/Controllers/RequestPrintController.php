<?php

namespace App\Http\Controllers;

use DB;
use App\Comments;
use Carbon\Carbon;
use App\RequestPrint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    

class RequestPrintController extends Controller
{
    public function list()
    {    

        $requests = DB::table('requests')->paginate(20);

        return view('requests', compact('requests'));
    }

     public function show($id)
    {
        $request = RequestPrint::findOrFail($id);
        $comments = Comments::where('request_id', $request->id)->get();
        return view('requests.showRequest', compact('request', 'comments'));
    }

    public function create()
    {  
        return view('requests.addRequest');

    }

    public function add(Request $request)
    {
        $requestPrint = new RequestPrint();
        $requestPrint->quantity = $request->get('quantity');
        $requestPrint->paper_size = $request->get('paperSize');
        $requestPrint->paper_type = $request->get('paperType');
        $requestPrint->colored = $request->get('colored');
        $requestPrint->stapled = $request->get('stapled');
        $requestPrint->front_back = $request->get('frontback');
        $requestPrint->description = $request->get('description');
        $requestPrint->status = 0;
        $requestPrint->file = $request->get('file');
        $requestPrint->owner_id = Auth::User()->id;
        $requestPrint->save();

        return redirect('requests');
    }

    public function complete($id)
    {
        $request = RequestPrint::findOrFail($id);
        $request->status = 1;
        $request->closed_user_id = \Auth::User()->id;
        $request->closed_date = Carbon::now();
        $request->save();

        return redirect()->route('requestShow', ['id'=> $id]); 
    }

    public function refuse(Request $requestHttp, $id)
    {
        $request = RequestPrint::findOrFail($id);
        $request->status = 1;
        $request->closed_user_id = \Auth::User()->id;
        $request->closed_date = Carbon::now();
        $request->refused_reason = $requestHttp->get('refuseReason');
        $request->save();

        return redirect()->route('requestShow', ['id'=> $id]); 
    }
}
