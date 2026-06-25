<?php

namespace App\Http\Controllers\Laporan;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class LaporanController extends Controller
{
    public function penduduk(): View
    {
        return view('laporan.penduduk.index');
    }

    public function kartuKeluarga(): View
    {
        return view('laporan.kartu-keluarga.index');
    }

    public function kelahiran(): View
    {
        return view('laporan.kelahiran.index');
    }

    public function kematian(): View
    {
        return view('laporan.kematian.index');
    }

    public function pendatang(): View
    {
        return view('laporan.pendatang.index');
    }

    public function pindah(): View
    {
        return view('laporan.pindah.index');
    }
}
