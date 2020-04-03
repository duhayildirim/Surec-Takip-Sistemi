<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class surec_controller extends Controller
{
    public function icerik()
    {
        return view('uretimhane.surec');
    }


    public function icerik_detay()
    {
        return view('uretimhane.surec_detay');
    }
}
