<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class biten_urunler_controller extends Controller
{
    public function icerik()
    {
        return view('uretimhane.biten_urunler');
    }
}
