<?php

namespace App\Http\Controllers\uretimhane\tezgahina_git;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tezgah_detay_controller extends Controller
{
    public function icerik()
    {
        return view('uretimhane.tezgahina_git.tezgah_detay');
    }

}
