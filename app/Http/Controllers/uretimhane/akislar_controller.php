<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\Models\akislar;
use App\Models\akislar_tezgahlar;
use App\Models\tezgahlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class akislar_controller extends Controller
{
    public function icerik()
    {
        $tezgahlar = tezgahlar::all();
        View::share('tezgahlar',$tezgahlar);

        return view('uretimhane.akislar');
    }

    public function akis_listesi()
    {
        $akislar = akislar::all();
        View::share('akislar',$akislar);

        return view('uretimhane.akis_listesi');
    }

    public function akis_kaydet(Request $request)
    {
        $request -> validate([
            "ad" => 'required',
            "tezgah_id" => 'required|array',
            "tezgah_id.*" => 'required|distinct'
        ]);

        $kaydet = new akislar();
        $kaydet ->fill($request->all());

        $kaydet-> save();

        foreach($request -> tezgah_id as $girdi_tezgah_id => $tezgahid)
        {
            $akislar_tezgahlar_kaydet = new akislar_tezgahlar();
            $akislar_tezgahlar_kaydet -> tezgah_id = $tezgahid;
            $akislar_tezgahlar_kaydet -> akis_id = $kaydet -> id;
            $akislar_tezgahlar_kaydet ->save();
        }

        return redirect()->route('akis_listesi');
    }

    public function akis_sil($id)
    {
        $sil = akislar::find($id);
        akislar_tezgahlar::where('akis_id', $sil -> id)->delete();
        $sil -> delete();

        return redirect()->route('akis_listesi');
    }
}
