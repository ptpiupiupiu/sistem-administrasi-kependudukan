<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class PendatangController extends Controller
{
    public function index(): View
    {
        return view('layanan.pendatang.index');
    }
}
