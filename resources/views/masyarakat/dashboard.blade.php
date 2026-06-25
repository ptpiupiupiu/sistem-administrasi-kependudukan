<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dashboard Masyarakat - {{ config('app.name', 'SIAK') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-100 font-sans text-slate-900 antialiased">
        <div class="min-h-screen">
            <header class="border-b border-slate-200 bg-white">
                <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                    <a href="{{ route('masyarakat.dashboard') }}" class="text-base font-semibold text-slate-800">
                        SIAK Masyarakat
                    </a>

                    <div class="flex items-center gap-4">
                        <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-slate-700 hover:text-blue-600">
                            Profil
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="rounded-xl bg-slate-800 px-4 py-2 text-sm font-medium text-white hover:bg-slate-700">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
                <div class="rounded-2xl bg-white p-6 shadow-sm">
                    <p class="text-sm font-medium text-blue-600">Dashboard Masyarakat</p>
                    <h1 class="mt-2 text-2xl font-semibold text-slate-900">Selamat datang, {{ auth()->user()->name }}</h1>
                    <p class="mt-3 max-w-2xl text-sm leading-6 text-slate-600">
                        Halaman ini disiapkan untuk masyarakat agar dapat mengakses layanan kependudukan tanpa masuk ke dashboard internal administrator, operator, atau pimpinan.
                    </p>
                </div>

                <div class="mt-6 grid gap-4 md:grid-cols-3">
                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <h2 class="font-semibold text-slate-800">Ajukan Layanan</h2>
                        <p class="mt-2 text-sm text-slate-500">Pengajuan kelahiran, kematian, pendatang, atau pindah akan ditambahkan pada tahap berikutnya.</p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <h2 class="font-semibold text-slate-800">Status Pengajuan</h2>
                        <p class="mt-2 text-sm text-slate-500">Riwayat dan status pengajuan masyarakat akan tampil di sini.</p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <h2 class="font-semibold text-slate-800">Profil Saya</h2>
                        <p class="mt-2 text-sm text-slate-500">Data akun dan profil masyarakat dapat dikelola melalui menu profil.</p>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
