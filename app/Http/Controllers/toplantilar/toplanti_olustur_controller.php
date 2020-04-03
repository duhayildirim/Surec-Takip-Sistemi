<?php

namespace App\Http\Controllers\toplantilar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class toplanti_olustur_controller extends Controller
{
    public function icerik()
    {
        return view('toplantilar.toplanti_olustur');
    }
}
