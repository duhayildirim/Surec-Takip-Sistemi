<?php

namespace App\Http\Controllers\mesajlar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class gelen_kutusu_controller extends Controller
{
    public function icerik()
    {
        return view('mesajlar.gelen_kutusu');
    }
}
