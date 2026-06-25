<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class WilayahController extends Controller
{
    public function index(): View
    {
        return view('master.wilayah.index');
    }
}
