<div class="border-b border-slate-200 bg-white">
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <div>
            <p class="text-sm font-medium text-slate-600">Sistem Administrasi Kependudukan</p>
        </div>

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
</div>
