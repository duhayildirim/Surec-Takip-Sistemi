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
        if (isset($tezgah)){
            $akisVerileri = $tezgah->akisVerileri;
            foreach ($akisVerileri as $akis){
                $surecVerileri = $akis->surecVerileri;
                foreach ($surecVerileri as $surec){
                    $surecler[]=$surec;
                }
            }
        }
//        dd($surecler);


        return view('uretimhane.tezgahina_git.tezgah_detay')->with(['surecler' => $surecler]);
    }
}
