<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        request()->validate([
            'firstName' => ['required', 'string', 'min:3' , 'max:255'],
            'lastName' => ['required', 'string', 'min:3' , 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => request('firstName') . " " . request('lastName'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'You have been registered!');
    }

}
