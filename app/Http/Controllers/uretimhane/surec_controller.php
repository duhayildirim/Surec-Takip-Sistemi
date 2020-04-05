<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\Models\surecler;
use App\Models\surecler_akislar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class surec_controller extends Controller
{
    public function icerik()
    {
        $surecler = surecler::all();
        View::share('surecler',$surecler);

        return view('uretimhane.surec');
    }

    public function icerik_detay($id)
    {
        $surec_detay = surecler::find($id);
        View::share('surec_detay',$surec_detay);

        return view('uretimhane.surec_detay');
    }
}
