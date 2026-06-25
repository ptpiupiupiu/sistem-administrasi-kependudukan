<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class PindahController extends Controller
{
    public function index(): View
    {
        return view('layanan.pindah.index');
    }
}
