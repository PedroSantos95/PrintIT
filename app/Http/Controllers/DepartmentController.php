<?php

namespace App\Http\Controllers;

use DB;
use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function list()
    {
    	 $departments = DB::table('departments')->paginate(20);
         $statisticsBlack = array();
         $statisticsColor = array();

        foreach ($departments as $department) {
            $statisticsBlack[$department->id] = $this->getBlackPrintsDepartment($department->id);
            $statisticsColor[$department->id] = $this->getColorPrintsDepartment($department->id);
        }
        return view('department', compact('departments', 'statisticsBlack', 'statisticsColor'));    	
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

    public function getBlackPrintsDepartment($id)
    {

        $requests = Department::join('users', 'departments.id', '=', 'users.department_id')->join('requests', 'users.id', '=', 'requests.owner_id')->select('requests.quantity','departments.id', 'requests.status')->where('status', 1)->where('colored', 0)->where('departments.id', '=' , $id)->get();

  
        $counter = 0;
        foreach ($requests as $request) {
            $counter+=$request->quantity;
        }

        return $counter;
    }

    public function getColorPrintsDepartment($id)
    {

        $requests = Department::join('users', 'departments.id', '=', 'users.department_id')->join('requests', 'users.id', '=', 'requests.owner_id')->select('requests.quantity','departments.id', 'requests.status')->where('status', 1)->where('colored', 1)->where('departments.id', '=' , $id)->get();

  
        $counter = 0;
        foreach ($requests as $request) {
            $counter+=$request->quantity;
        }

        return $counter;
    }
    
}
