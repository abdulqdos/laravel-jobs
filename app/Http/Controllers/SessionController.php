<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){

        // validate
        $user = request()->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // log in
        if(!Auth::attempt($user)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry , the email or password is incorrect.',
                'password' => 'Sorry , the email or password is incorrect.',
            ]);
        }

        // regenerate a token for security
        request()->session()->regenerate();

        // redirect to home page
        return redirect('/')->with('success', 'You are now logged in');

    }

    public function destroy(){
        Auth::logout();

        return redirect('/')->with('success', 'You have been logged out!');
    }
}
