<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tezgahlari_gor_controller extends Controller
{
    public function icerik()
    {
        return view('uretimhane.tezgahlari_gor');
    }
}
