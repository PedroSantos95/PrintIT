<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UserController extends Controller
{
    
    public function __construct()
    {

    }

    public function list()
    {    
        $users = DB::table('users')->paginate(10);

    	return view('users', compact('users'));
    }

    public function show($id)
    {
    	$user = User::findOrFail($id);
    	return view('users.show', compact('user'));
    }
}
