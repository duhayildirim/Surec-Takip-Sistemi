<?php

namespace App\Http\Controllers\toplantilar;

use App\Http\Controllers\Controller;
use App\kullanicilar;
use App\Models\gelecek_toplantilar;
use App\Models\toplantilar_calisanlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class toplanti_olustur_controller extends Controller
{
    public function icerik()
    {
        $calisanlar = kullanicilar::all();
        View::share('calisanlar', $calisanlar);

        return view('toplantilar.toplanti_olustur');
    }

    public function toplanti_kaydet(Request $request)
    {
        $request->validate([
           "konu" =>"required",
           "aciklama" =>"required",
           "calisan_id" =>"required|array",
           "calisan_id.*" =>"required|distinct",
           "tarih" =>"required",
           "saat" =>"required"
        ]);

        $kaydet = new gelecek_toplantilar();
        $kaydet -> fill($request->all());

        $kaydet -> save();

        foreach ($request->calisan_id as $girdi_calisan_id => $calisanid)
        {
            $toplantilar_calisanlar_kaydet = new toplantilar_calisanlar();
            $toplantilar_calisanlar_kaydet -> calisan_id = $calisanid;
            $toplantilar_calisanlar_kaydet -> toplanti_id = $kaydet -> id;
            $toplantilar_calisanlar_kaydet->save();
        }

        return redirect()->route('gelecek_toplantilar');
    }

}
