<?php

namespace App\Http\Controllers;

use App\RequestPrint;
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
        $blackPrints = $this->getBlackPrints();
        $totalPrints = $coloredPrints + $blackPrints;
        return view('welcome', compact('coloredPrints','blackPrints','totalPrints'));
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

}
