<?php

use App\Models\User;

test('authenticated scaffold pages can be rendered', function (string $route) {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(route($route))
        ->assertOk();
})->with([
    'dashboard',
    'masyarakat.dashboard',
    'master.penduduk.index',
    'master.kartu-keluarga.index',
    'master.agama.index',
    'master.pendidikan.index',
    'master.pekerjaan.index',
    'master.wilayah.index',
    'layanan.kelahiran.index',
    'layanan.kematian.index',
    'layanan.pendatang.index',
    'layanan.pindah.index',
    'laporan.penduduk',
    'laporan.kartu-keluarga',
    'laporan.kelahiran',
    'laporan.kematian',
    'laporan.pendatang',
    'laporan.pindah',
    'pengaturan.users.index',
    'pengaturan.roles.index',
]);
