<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class PekerjaanController extends Controller
{
    public function index(): View
    {
        return view('master.pekerjaan.index');
    }
}
