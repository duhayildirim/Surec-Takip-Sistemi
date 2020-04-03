<?php

namespace App\Http\Controllers;

use App\kullanicilar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class kayit_ol_controller extends Controller
{
    public function icerik()
    {
        return view('kayit_ol');
    }
    public function kullanici_kayit(Request $request)
    {
        $request->validate([
            "ad" => 'required|min:2|max:15',
            "soyad" => 'required|min:2|max:15',
            "sifre" => 'required|confirmed|min:5|max:15',
            "email" => 'required|email|unique:kullanicilar',
        ]);

        $kayit = new kullanicilar();
        $kayit->ad = $request->input('ad');
        $kayit->soyad = $request->input('soyad');
        $kayit->sifre = Hash::make(\request('sifre'));
        $kayit->email = $request->input('email');
        $kayit->save();

        auth()->login($kayit);

        return redirect()->route('anasayfa');

    }
}
