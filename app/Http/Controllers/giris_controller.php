<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class giris_controller extends Controller
{
    public function icerik()
    {
        return view('giris');
    }

    public function kullanici_giris(Request $request)
    {
        $request -> validate([
           'email' => 'required|email',
           'sifre' => 'required'
        ]);

        if(auth()->attempt(['email' => \request('email'), 'password' => \request('sifre')]))
        {
            \request()->session()->regenerate();

            return redirect()->intended('/anasayfa');
        }
        else
        {
            $errors = ['email' => 'hatalı giriş denemesi'];

            return back()->withErrors($errors);
        }
    }

    public function kullanici_cikis()
    {
        auth()->logout();
        \request()->session()->flush();
        \request()->session()->regenerate();

        return redirect()->route('giris');
    }
}
