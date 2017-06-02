<?php

namespace App\Http\Controllers;

use DB;
use App\Department;
use App\RequestPrint;
use App\User;
use Illuminate\Http\Request;

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
        return view('welcome', compact('coloredPrints','blackPrints','totalPrints', 'usersCount', 'departmentPrints'));
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


    public function getTotalUsers()
    {
        $usersCount = User::all()->count();

        return $usersCount;
    }

}
