<x-app-layout>
    <x-slot name="header">
        <h1 class="text-xl font-semibold text-slate-800">Dashboard</h1>
    </x-slot>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        @foreach (['Total Penduduk', 'Total KK', 'Kelahiran Tahun Ini', 'Kematian Tahun Ini'] as $label)
            <x-card>
                <p class="text-sm font-medium text-slate-500">{{ $label }}</p>
                <p class="mt-3 text-2xl font-semibold text-slate-900">0</p>
            </x-card>
        @endforeach
    </div>

    <div class="mt-6 grid gap-6 lg:grid-cols-2">
        <x-card>
            <h2 class="text-base font-semibold text-slate-800">Grafik Kependudukan</h2>
            <p class="mt-2 text-sm text-slate-500">Area statistik akan diisi setelah data kependudukan tersedia.</p>
        </x-card>

        <x-card>
            <h2 class="text-base font-semibold text-slate-800">Aktivitas Terbaru</h2>
            <p class="mt-2 text-sm text-slate-500">Belum ada aktivitas terbaru.</p>
        </x-card>
    </div>
</x-app-layout>
