<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\RequestPrint;

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
        return view('requests.showRequest', compact('request'));
    }

}