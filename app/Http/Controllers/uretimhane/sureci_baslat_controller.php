<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\Models\akislar;
use App\Models\is_emirleri;
use App\Models\surecler;
use App\Models\surecler_akislar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class sureci_baslat_controller extends Controller
{

    public function sureci_baslat($id)
    {
        $ister = is_emirleri::find($id);
        View::share('ister', $ister);

        $akislar = akislar::all();
        View::share('akislar' , $akislar);

        return view('uretimhane.sureci_baslat');
    }

    public function sureci_kaydet(Request $request)
    {
        $request -> validate([
            "ad" => 'required',
            "adet" => 'required',
            "teslim_tarihi" => 'required',
            "akis_id" => 'required'
        ]);

        $kaydet = new surecler();
        $kaydet ->fill($request->all());
        $kaydet -> save();

        $surecler_akislar_kaydet = new surecler_akislar();
        $surecler_akislar_kaydet -> akis_id = $request -> akis_id;
        $surecler_akislar_kaydet -> surec_id = $kaydet -> id;
        $surecler_akislar_kaydet -> save();

        return redirect()->route('surec');
    }

}
