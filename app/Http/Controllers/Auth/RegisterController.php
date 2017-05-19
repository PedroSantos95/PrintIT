<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

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
            'profile_url' => 'nullable',
            'profile_photo' => 'nullable',
            'presentation' => 'nullable',
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
            'print_evals' => "0",
            'print_counts' => "0",
        ]);

        $confirmation_code = $user->confirmation_code;

        \Mail::send('emailconfirmation', compact('user','confirmation_code'), function($message) {
            $message->to($user('email'), $user('name'))
                ->subject('Verify your email address');
        });

        \Flash::message('Thanks for signing up! Please check your email.');

        return Redirect::home();
    }

     public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        Flash::message('You have successfully verified your account.');

        return Redirect::route('login_path');
    }
}
