<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Mail\VerificationMail;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|same:password',
            'phone' => 'nullable|digits:9',
            'confirmation_code' => 'nullable',
            'profile_url' => 'nullable',
            'profile_photo' => 'nullable',
            'presentation' => 'nullable'
        ]);
    }
    

    protected function create(array $data)
    {
        $confirmation_code = str_random(30);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'profile_url' => $data['profile_url'],
            'presentation' => $data['presentation'],
            'admin' => "0",
            'blocked' => "0",
            'department_id' => "1",
            'activated' => "0",
            'confirmation_code' => $confirmation_code,
            'print_evals' => "0",
            'print_counts' => "0",
        ]);

        \Mail::to($user->email)->send(new VerificationMail($user));

        return $user;

    }

    public function confirmEmail($confirmation_code)
    {
        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {

        }

        //Nao chega
        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();
        return view('/welcome');
    }
}
    