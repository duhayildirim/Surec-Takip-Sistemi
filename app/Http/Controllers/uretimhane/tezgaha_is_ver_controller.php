<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tezgaha_is_ver_controller extends Controller
{
    public function icerik()
    {
        return view('uretimhane.is_takip');
    }
}
