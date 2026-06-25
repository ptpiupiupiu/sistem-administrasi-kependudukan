<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke(): View|RedirectResponse
    {
        if (Auth::user()?->hasRole('Masyarakat')) {
            return redirect()->route('masyarakat.dashboard');
        }

        return view('dashboard');
    }
}
