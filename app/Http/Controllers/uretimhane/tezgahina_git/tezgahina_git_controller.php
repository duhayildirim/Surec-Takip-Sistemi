<?php

namespace App\Http\Controllers\uretimhane\tezgahina_git;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tezgahina_git_controller extends Controller
{
    public function icerik()
    {
        return view('uretimhane.tezgahina_git.tezgahina_git');
    }

}
