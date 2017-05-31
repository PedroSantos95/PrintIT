<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function list()
    {
    	 $departments = DB::table('departments')->paginate(20);

        return view('department', compact('departments'));    	
    }

    public function getColoredPrintsByDepartment($id)
    {
        $requests = RequestPrint::where('status',1)->where('colored', 1)->get();
        
        $counter = 0;
        foreach ($requests as $request) {
            $counter+=$request->quantity;
        }

        return $counter;
    }
}
