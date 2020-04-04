<?php

namespace App\Http\Controllers\toplantilar;

use App\Http\Controllers\Controller;
use App\Models\gelecek_toplantilar;
use App\Models\toplantilar_calisanlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class gelecek_toplantilar_controller extends Controller
{
    public function icerik()
    {
        $toplatilar = gelecek_toplantilar::all();
        View::share('toplantilar',$toplatilar);

        return view('toplantilar.gelecek_toplantilar');
    }

    public function toplanti_sil($id)
    {

        $sil = gelecek_toplantilar::find($id);
        toplantilar_calisanlar::where('toplanti_id' , $sil -> id)->delete();
        $sil -> delete();

        return redirect()->route('gelecek_toplantilar');
    }
}
