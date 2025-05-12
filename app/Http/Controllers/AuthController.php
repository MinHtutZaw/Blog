<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        $formData = request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'email' => ['required', 'email'],
            'username' => ['required', 'max:255', 'min:3'],
            'password' => ['required', 'min:8']
        ]);
        $user = User::create($formData);
        auth()->login($user);
        return redirect('/')->with('success', 'Welcome , ' . $user->name);
        
    }
       public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Good bye');
    }
       public function login()


    {


        return view('auth.login');


    }
    public function post_login()
    {
        //validation
        $formData=request()->validate([
            'email'=>['required','email','max:255',Rule::exists('users', 'email')],
            'password'=>['required','min:8','max:255']
        ], [
            'email.required'=>'Please enter your email address.',
            'password.min'=>'Password should be at least 8 characters with a captial and small letter with special character.'
        ]);
        if (auth()->attempt($formData)) {
            return redirect('/')->with('success', 'Welcome back');
        } else {
            //if user credentials fail -> redirect back to form with error
            return redirect()->back()->withErrors([
                'email'=>'Wrong email please try again.'
            ]);


        }
    }
}
