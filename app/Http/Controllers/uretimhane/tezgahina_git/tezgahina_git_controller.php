<?php

namespace App\Http\Controllers\uretimhane\tezgahina_git;

use App\Http\Controllers\Controller;
use App\Models\tezgahlar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class tezgahina_git_controller extends Controller
{
    public function icerik()
    {
        $tezgahlar = tezgahlar::all();
        View::share('tezgahlar' , $tezgahlar);

        return view('uretimhane.tezgahina_git.tezgahina_git');
    }

}
