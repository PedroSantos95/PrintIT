<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Printer;
use Illuminate\Support\Facades\Input;

class PrinterController extends Controller
{
	    public function __construct()
    {
         $this->middleware('admin', ['only' => ['add', 'create']]);
    }

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
        $rules = [
            'name'=>'required'
        ];
        
        
        $validator=Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput(Input::all());
        }

		$printer = new Printer();
		$printer->name = $request->get('name');
		$printer->save();
		return redirect('printers');
	}

}
