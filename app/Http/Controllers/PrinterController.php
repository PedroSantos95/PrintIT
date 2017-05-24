<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Printer;

class PrinterController extends Controller
{
    public function list()
    {    

        $printers = DB::table('printers')->paginate(20);

        return view('printers', compact('printers'));
    }

    public function create()
    {	
    	return view('addPrinter');
	}

	public function add(Request $request)
	{
		$printer = new Printer();
		$printer->name = $request->get('name');
		$printer->save();
		return redirect('printers');
	}

}
