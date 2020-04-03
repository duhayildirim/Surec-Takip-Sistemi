<?php

namespace App\Http\Controllers\mesajlar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mesaj_olustur_controller extends Controller
{
    public function icerik()
    {
        return view('mesajlar.mesaj_olustur');
    }
}

