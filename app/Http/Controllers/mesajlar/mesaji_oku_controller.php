<?php

namespace App\Http\Controllers\mesajlar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mesaji_oku_controller extends Controller
{
    public function icerik()
    {
        return view('mesajlar.mesaji_oku');
    }
}
