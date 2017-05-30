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

    public function block($id)
    {
        $user = User::findOrFail($id);
        $user->blocked = 1;
        $user->save();

        return redirect()->route('userShow', compact('user')); 
    }

     public function unblock($id)
    {
        $user = User::findOrFail($id);
        $user->blocked = 0;
        $user->save();

        return redirect()->route('userShow', compact('user')); 
    }

    public function listBlock()
    {
        $users = DB::table('users')->paginate(500);

        return view('blockedUsers', compact('users'));

    }

    public function unblockList($id)
    {
        $user = User::findOrFail($id);
        $user->blocked = 0;
        $user->save();

        return redirect()->route('blockedUsers', compact('user')); 
    }

    public function giveAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->admin = 1;
        $user->save();

        return redirect()->route('listAdmin', compact('user')); 
    }

    public function removeAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->admin = 0;
        $user->save();

        return redirect()->route('listAdmin', compact('user')); 
    }

    public function listADmin()
    {
         $users = DB::table('users')->paginate(500);

        return view('giveAdmin', compact('users'));

    }
    
}
