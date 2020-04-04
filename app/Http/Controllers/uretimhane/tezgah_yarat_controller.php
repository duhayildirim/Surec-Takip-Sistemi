<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\kullanicilar;
use App\Models\tezgahlar;
use App\Models\tezgahlar_calisanlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class tezgah_yarat_controller extends Controller
{
    public function icerik()
    {
        $isciler = kullanicilar::where('rol','İşçi')->get();
        View::share('isciler' , $isciler);

        return view('uretimhane.tezgah_yarat');
    }

    public function tezgah_kaydet(Request $request)
    {
        $kaydet = new tezgahlar();
        $kaydet -> fill($request->all());

        $kaydet -> save();

        foreach ($request -> calisan_id as $girdi_calisan_id => $calisanid)
        {
            $tezgahlar_calisanlar_kaydet = new tezgahlar_calisanlar();
            $tezgahlar_calisanlar_kaydet -> calisan_id = $calisanid;
            $tezgahlar_calisanlar_kaydet -> tezgah_id = $kaydet -> id ;
            $tezgahlar_calisanlar_kaydet -> save();
        }

        return redirect()->route('tezgahlari_gor');
    }
}
