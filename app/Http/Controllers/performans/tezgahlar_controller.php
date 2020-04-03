<?php

namespace App\Http\Controllers\performans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tezgahlar_controller extends Controller
{
    public function icerik()
    {
        return view('performans.tezgahlar');
    }
}
