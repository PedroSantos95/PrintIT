<?php

namespace App\Http\Controllers;

use DB;
use App\Department;
use App\RequestPrint;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coloredPrints = $this->getColoredPrints();
        $usersCount = $this->getTotalUsers();
        $blackPrints = $this->getBlackPrints();
        $totalPrints = $coloredPrints + $blackPrints;
        $pieColor = ($coloredPrints/$totalPrints);
        $pieBlack = ($blackPrints/$totalPrints);
        $printsDay = $this->getPrintsDay();
        $printMonth = $this->getPrintsMonth();

        $pieChart = $this->pieChart($coloredPrints, $blackPrints);
        return view('welcome', compact('coloredPrints','blackPrints','totalPrints', 'usersCount', 'departmentPrints', 'pieChart', 'printsDay', 'printMonth'));
    }

    public function getColoredPrints()
    {
        $requests = RequestPrint::where('status',1)->where('colored', 1)->get();
        
        $counter = 0;
        foreach ($requests as $request) {
            $counter+=$request->quantity;
        }

        return $counter;
    }

    public function getBlackPrints()
    {
        $requests = RequestPrint::where('status',1)->where('colored', 0)->get();
        
        $counter = 0;
        foreach ($requests as $request) {
            $counter+=$request->quantity;
        }

        return $counter;
    }

    public function getPrintsDay()
    {
        $today = Carbon::today()->toDateString();
        $requests = RequestPrint::where('status', 1)->whereDate('due_date', '=', $today)->get();

         $counter = 0;
        foreach ($requests as $request) {
            $counter+=$request->quantity;
        }
     

        return $counter;
    }

        public function getPrintsMonth()
    {
        $month = Carbon::today()->month;
        $requests = RequestPrint::where('status', 1)->whereMonth('due_date', '=', $month)->get();

         $counter = 0;
        foreach ($requests as $request) {
            $counter+=$request->quantity;
        }
     

        return $counter;
    }


    public function getTotalUsers()
    {
        $usersCount = User::all()->count();

        return $usersCount;
    }

    public function pieChart($color, $black)
    {
        $reasons = \Lava::DataTable();
     
        $reasons->addStringColumn('Reasons')
                ->addNumberColumn('Percent')
                ->addRow(['Color Prints', $color])
                ->addRow(['Black Prints', $black]);

        \Lava::PieChart('IMDB', $reasons, [
            'is3D'   => true,
            'slices' => [
                ['offset' => 0.2],
                ['offset' => 0.25]
            ]
        ]);   
    }

}
