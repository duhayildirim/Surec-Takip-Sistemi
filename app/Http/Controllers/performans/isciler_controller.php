<?php

namespace App\Http\Controllers\performans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class isciler_controller extends Controller
{
    public function icerik()
    {
        return view('performans.isciler');
    }
}
