<?php

namespace App\Http\Controllers\calisanlar;

use App\Http\Controllers\Controller;
use App\kullanicilar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ekip_listesi_controller extends Controller
{
    public function icerik()
    {
        $calisanlar = kullanicilar::all();
        View::share('calisanlar' , $calisanlar);

        return view('calisanlar.ekip_listesi');
    }
}
