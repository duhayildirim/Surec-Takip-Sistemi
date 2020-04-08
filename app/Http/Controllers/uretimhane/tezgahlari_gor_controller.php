<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\Models\akislar_tezgahlar;
use App\Models\tezgahlar;
use App\Models\tezgahlar_calisanlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class tezgahlari_gor_controller extends Controller
{
    public function icerik()
    {
        $tezgahlar = tezgahlar::all();
        View::share('tezgahlar' , $tezgahlar);

        return view('uretimhane.tezgahlari_gor');
    }

    public function tezgah_sil($id)
    {
        $sil = tezgahlar::find($id);
        tezgahlar_calisanlar::where('tezgah_id', $sil -> id)->delete();
        akislar_tezgahlar::where('tezgah_id', $sil -> id)->delete();
        $sil -> delete();

        return redirect()->route('tezgahlari_gor');

    }

}
