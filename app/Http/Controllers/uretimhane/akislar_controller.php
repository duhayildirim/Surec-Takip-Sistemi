<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class akislar_controller extends Controller
{
    public function icerik()
    {
        return view('uretimhane.akislar');
    }
    public function akis_listesi()
    {
        return view('uretimhane.akis_listesi');
    }
}
