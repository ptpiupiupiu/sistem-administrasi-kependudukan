<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Laporan\LaporanController;
use App\Http\Controllers\Layanan\KelahiranController;
use App\Http\Controllers\Layanan\KematianController;
use App\Http\Controllers\Layanan\PendatangController;
use App\Http\Controllers\Layanan\PindahController;
use App\Http\Controllers\Master\AgamaController;
use App\Http\Controllers\Master\KartuKeluargaController;
use App\Http\Controllers\Master\PekerjaanController;
use App\Http\Controllers\Master\PendidikanController;
use App\Http\Controllers\Master\PendudukController;
use App\Http\Controllers\Master\WilayahController;
use App\Http\Controllers\Masyarakat\DashboardController as MasyarakatDashboardController;
use App\Http\Controllers\Pengaturan\RoleController;
use App\Http\Controllers\Pengaturan\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/masyarakat/dashboard', MasyarakatDashboardController::class)->name('masyarakat.dashboard');

    Route::prefix('master')->name('master.')->group(function () {
        Route::get('penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
        Route::get('kartu-keluarga', [KartuKeluargaController::class, 'index'])->name('kartu-keluarga.index');
        Route::get('agama', [AgamaController::class, 'index'])->name('agama.index');
        Route::get('pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index');
        Route::get('pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan.index');
        Route::get('wilayah', [WilayahController::class, 'index'])->name('wilayah.index');
    });

    Route::prefix('layanan')->name('layanan.')->group(function () {
        Route::get('kelahiran', [KelahiranController::class, 'index'])->name('kelahiran.index');
        Route::get('kematian', [KematianController::class, 'index'])->name('kematian.index');
        Route::get('pendatang', [PendatangController::class, 'index'])->name('pendatang.index');
        Route::get('pindah', [PindahController::class, 'index'])->name('pindah.index');
    });

    Route::prefix('laporan')->name('laporan.')->group(function () {
        Route::get('penduduk', [LaporanController::class, 'penduduk'])->name('penduduk');
        Route::get('kartu-keluarga', [LaporanController::class, 'kartuKeluarga'])->name('kartu-keluarga');
        Route::get('kelahiran', [LaporanController::class, 'kelahiran'])->name('kelahiran');
        Route::get('kematian', [LaporanController::class, 'kematian'])->name('kematian');
        Route::get('pendatang', [LaporanController::class, 'pendatang'])->name('pendatang');
        Route::get('pindah', [LaporanController::class, 'pindah'])->name('pindah');
    });

    Route::prefix('pengaturan')->name('pengaturan.')->group(function () {
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
