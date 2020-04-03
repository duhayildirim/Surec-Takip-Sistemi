<?php

namespace App\Http\Controllers\uretimhane;

use App\Http\Controllers\Controller;
use App\Models\is_emirleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class sureci_baslat_controller extends Controller
{

    public function sureci_baslat($id)
    {

        $ister = is_emirleri::find($id);
        View::share('ister', $ister);

        return view('uretimhane.sureci_baslat');
    }
}
