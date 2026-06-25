<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class KelahiranController extends Controller
{
    public function index(): View
    {
        return view('layanan.kelahiran.index');
    }
}
