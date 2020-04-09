<?php

namespace App\Http\Controllers\performans;

use App\Http\Controllers\Controller;
use App\kullanicilar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class isciler_controller extends Controller
{
    public function icerik()
    {
        $isciler = kullanicilar::all();
        View::share('isciler',$isciler);

        return view('performans.isciler');
    }
}
