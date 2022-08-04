<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $check = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($check)) {
            return redirect()->route('home');
        }
        return redirect()->route('login');
    }

    public function register(Request $request)
    {
        $check = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create($check);
        Auth::login($user);
        return redirect()->route('home');
    }
}
