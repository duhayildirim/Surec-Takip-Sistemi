<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tezgah_yarat_controller extends Controller
{
    public function icerik()
    {
        return view('uretimhane.tezgah_yarat');
    }
}
