@php
    $sections = [
        'Master Data' => [
            ['label' => 'Penduduk', 'route' => 'master.penduduk.index'],
            ['label' => 'Kartu Keluarga', 'route' => 'master.kartu-keluarga.index'],
            ['label' => 'Agama', 'route' => 'master.agama.index'],
            ['label' => 'Pendidikan', 'route' => 'master.pendidikan.index'],
            ['label' => 'Pekerjaan', 'route' => 'master.pekerjaan.index'],
            ['label' => 'Wilayah', 'route' => 'master.wilayah.index'],
        ],
        'Layanan' => [
            ['label' => 'Kelahiran', 'route' => 'layanan.kelahiran.index'],
            ['label' => 'Kematian', 'route' => 'layanan.kematian.index'],
            ['label' => 'Penduduk Datang', 'route' => 'layanan.pendatang.index'],
            ['label' => 'Penduduk Pindah', 'route' => 'layanan.pindah.index'],
        ],
        'Laporan' => [
            ['label' => 'Laporan Penduduk', 'route' => 'laporan.penduduk'],
            ['label' => 'Laporan KK', 'route' => 'laporan.kartu-keluarga'],
            ['label' => 'Laporan Kelahiran', 'route' => 'laporan.kelahiran'],
            ['label' => 'Laporan Kematian', 'route' => 'laporan.kematian'],
            ['label' => 'Laporan Pendatang', 'route' => 'laporan.pendatang'],
            ['label' => 'Laporan Pindah', 'route' => 'laporan.pindah'],
        ],
        'Pengaturan' => [
            ['label' => 'User', 'route' => 'pengaturan.users.index'],
            ['label' => 'Role & Permission', 'route' => 'pengaturan.roles.index'],
        ],
    ];
@endphp

<aside class="border-b border-slate-200 bg-white lg:min-h-screen lg:w-72 lg:border-b-0 lg:border-r">
    <div class="flex h-16 items-center border-b border-slate-200 px-6">
        <a href="{{ route('dashboard') }}" class="text-base font-semibold text-slate-800">
            SIAK
        </a>
    </div>

    <nav class="space-y-6 px-4 py-5">
        <a href="{{ route('dashboard') }}" class="block rounded-xl px-3 py-2 text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
            Dashboard
        </a>

        @foreach ($sections as $title => $links)
            <div>
                <p class="px-3 text-xs font-semibold uppercase text-slate-500">{{ $title }}</p>
                <div class="mt-2 space-y-1">
                    @foreach ($links as $link)
                        <a href="{{ route($link['route']) }}" class="block rounded-xl px-3 py-2 text-sm {{ request()->routeIs($link['route']) ? 'bg-blue-600 text-white' : 'text-slate-700 hover:bg-slate-100' }}">
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </nav>
</aside>
