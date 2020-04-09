<?php

namespace App\Http\Controllers\performans;

use App\Http\Controllers\Controller;
use App\Models\tezgahlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class tezgahlar_controller extends Controller
{
    public function icerik()
    {
        $tezgahlar = tezgahlar::all();
        View::share('tezgahlar',$tezgahlar);

        return view('performans.tezgahlar');
    }
}
