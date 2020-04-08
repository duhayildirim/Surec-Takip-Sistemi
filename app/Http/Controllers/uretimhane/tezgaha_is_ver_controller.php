<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\Models\surecler_urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class tezgaha_is_ver_controller extends Controller
{
    public function icerik()
    {
        $surecler_urunler = surecler_urunler::all();
        View::share('surecler_urunler' , $surecler_urunler);
//        $surec ;
//        if(isset($surecler_urunler))
//        {
//            $surec_verileri= $surecler_urunler -> surecler;
//        }


        return view('uretimhane.is_takip');
    }
}
