<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anasayfa_controller extends Controller
{
    public function icerik()
    {
        return view('anasayfa');
    }
}
