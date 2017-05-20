<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;	

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/welcome';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function validateLogin(Request $request)
    {
        $user = User::where('email', $request->get('email'))->firstOrFail();
        if($user->confirmed ==1){
            $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
        }
    }


}
