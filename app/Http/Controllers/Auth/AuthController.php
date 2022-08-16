<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function login(AuthRequest $request)
    {
        $val = $request->validated();

        if (Auth::attempt($val)) {
            notify()->success('Giriş yapıldı', 'İşlem Başarılı');
            return redirect()->route('home');
        } else {
            notify()->error('Giriş yapılamadı', 'İşlem Başarısız');
            return redirect()->back();
        }
    }

    public function register(Request $request)
    {
        $check = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $check['name'],
            'email' => $check['email'],
            'password' => bcrypt($check['password']),
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        notify()->success('Çıkış yapıldı', 'İşlem Başarılı');
        return redirect()->route('login');
    }
}
