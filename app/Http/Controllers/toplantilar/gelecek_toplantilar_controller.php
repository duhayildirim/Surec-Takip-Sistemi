<?php

namespace App\Http\Controllers\toplantilar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class gelecek_toplantilar_controller extends Controller
{
    public function icerik()
    {
        return view('toplantilar.gelecek_toplantilar');
    }
}
