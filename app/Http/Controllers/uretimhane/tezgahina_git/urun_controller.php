<?php

namespace App\Http\Controllers\uretimhane\tezgahina_git;

use App\Http\Controllers\Controller;
use App\Models\biten_urunler;
use App\Models\surecler;
use App\Models\surecler_urunler;
use App\Models\urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class urun_controller extends Controller
{
    public function ilk_urun_kaydet(Request $request,$id)
    {
        $request -> validate([
            "urun_no" => 'required',
            "tezgah_id" => 'required'
        ]);

        $surec = surecler::find($id);

        $kaydet = new urunler();
        $kaydet -> fill($request -> all());

        $kaydet -> save();

        $surecler_urunler_kaydet = new surecler_urunler();
        $surecler_urunler_kaydet -> surec_id = $surec -> id;
        $surecler_urunler_kaydet -> urun_id = $kaydet -> id;
        $surecler_urunler_kaydet -> save();

        return redirect()->route('tezgahina_git');
    }

    public function depoya_kaydet(Request $request)
    {
        $depoya_kaydet= new biten_urunler();
        $depoya_kaydet -> fill($request->all());
        $depoya_kaydet -> save();

        return Response::json([
           'mesaj' => 'tamam'
        ]);
    }
}
