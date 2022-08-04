<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        return redirect()->route('login')->withErrors(['email' => 'Invalid credentials']);
    }

    public function register(Request $request)
    {
        $check = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($check->failed()) {
            return redirect()->route('register')->withErrors($check);
        }

        $user = User::create([
            'name' => $check['name'],
            'email' => $check['email'],
            'password' => bcrypt($check['password']),
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
}
