<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\Models\is_emirleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class is_tanimi_controller extends Controller
{
    public function icerik()
    {
        $isterler = is_emirleri::all();
        View::share('isterler' , $isterler);

        return view('uretimhane.is_tanimi');
    }
}
