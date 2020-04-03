<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\Models\is_emirleri;
use Illuminate\Http\Request;

class is_emri_ver_controller extends Controller
{
    public function icerik()
    {
        return view('uretimhane.is_emri_ver');
    }

    public function kaydet(Request $request)
    {

        $request->validate([
              'emir'=> "required",
        ]);

        $emir = new is_emirleri();
        $emir ->fill($request->all());

        $emir -> save();

        return redirect()->route('is_tanimi');
    }
}
