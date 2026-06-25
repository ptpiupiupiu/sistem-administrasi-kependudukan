<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AgamaController extends Controller
{
    public function index(): View
    {
        return view('master.agama.index');
    }
}
