<?php

namespace App\Http\Controllers;

use DB;
use App\Department;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class DepartmentController extends Controller
{

    public function list()
    {
    	 $departments = DB::table('departments')->paginate(20);
         $statisticsBlack = array();
         $statisticsColor = array();
         $barChart = $this->barChart();

        foreach ($departments as $department) {
            $statisticsBlack[$department->id] = $this->getBlackPrintsDepartment($department->id);
            $statisticsColor[$department->id] = $this->getColorPrintsDepartment($department->id);
        }
        return view('department', compact('departments', 'statisticsBlack', 'statisticsColor', 'barChart'));    	
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

    public function barChart()
    {
        $departments = DB::table('departments')->get();
        foreach ($departments as $department) 
         {
             $departmentUsers[$department->id] = DB::table('users')->where('department_id', '=', $department->id)->count();
         
        }


         $reasons = \Lava::DataTable();

         $reasons->addStringColumn('Users')
          ->addNumberColumn('Users');

          
          foreach($departmentUsers as $index => $departmentUser)
          {
            $example = DB::table('departments')->where('id', '=', $index)->get();
            if($departmentUser != 0)
            $reasons->addRow([ $example[0]->name, $departmentUser]);
          }

          \Lava::BarChart('Users', $reasons);
    }
    
}
