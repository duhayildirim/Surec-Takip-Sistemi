<?php

namespace App\Http\Controllers;

use App\kullanicilar;
use App\Models\biten_urunler;
use App\Models\surecler;
use App\Models\tezgahlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
//use Illuminate\Controllers\Controller;

class anasayfa_controller extends Controller
{
    public function icerik()
    {
        if(!Cache::has('istatistikler'))
        {
            $istatistikler = [
                'tezgahlar' => tezgahlar::count(),
                'surecler' => surecler::count(),
                'biten_urunler' => biten_urunler::count(),
                'calisanlar' => kullanicilar::count()
            ];
            $zaman = 10;
            Cache::put('istatistikler' , $istatistikler , $zaman);
        }else
         {
             $istatistikler = Cache::get('istatistikler');
         }

       // Cache::forget('istatistikler');
       // Cache::flush();

        return view('anasayfa' , compact('istatistikler'));
    }
}
