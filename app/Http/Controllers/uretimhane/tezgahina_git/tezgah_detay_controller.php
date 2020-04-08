<?php

namespace App\Http\Controllers\uretimhane\tezgahina_git;

use App\Http\Controllers\Controller;
use App\Models\akislar;
use App\Models\akislar_tezgahlar;
use App\Models\surecler;
use App\Models\surecler_akislar;
use App\Models\surecler_tezgahlar;
use App\Models\tezgahlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class tezgah_detay_controller extends Controller
{
    public function icerik($id)
    {
        $tezgah = tezgahlar::where('id',$id)->first();
        $surecler = [];
        if (isset($tezgah))
        {
            $akis_verileri = $tezgah->akis_verileri;
            foreach ($akis_verileri as $akis)
            {
                $surec_verileri = $akis->surec_verileri;
                foreach ($surec_verileri as $surec)
                {
                    $surecler[]=$surec;
                }
            }
        }
//        dd($surecler);

        $tezgahlar = tezgahlar::all();
        View::share('tezgahlar' , $tezgahlar);

        return view('uretimhane.tezgahina_git.tezgah_detay')->with(['surecler' => $surecler]);
    }
}
