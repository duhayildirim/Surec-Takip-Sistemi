<?php

namespace App\Http\Controllers\calisanlar;

use App\Http\Controllers\Controller;
use App\kullanicilar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class duzenle_controller extends Controller
{
    public function icerik($id)
    {
        $rol = kullanicilar::find($id);
        View::share('rol' , $rol);

        return view('calisanlar.duzenle');
    }


    public function calisan_guncelle(Request $request , $id)
    {

        $yeni = kullanicilar::find($id);
        if(isset($yeni))
        {
           $yeni -> fill($request->all());
        }
        $yeni -> save();

        return redirect()-> route('ekip_listesi');
    }

    public function calisan_sil($id)
    {

        $sil = kullanicilar::find($id);
        $sil -> delete();

        return redirect()->route('ekip_listesi');
    }
}
