<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\Models\biten_urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class biten_urunler_controller extends Controller
{
    public function icerik()
    {
        $biten_urunler = biten_urunler::all();
        View::share('biten_urunler',$biten_urunler);

        return view('uretimhane.biten_urunler');
    }
}
