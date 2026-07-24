<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Mobil Tea</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F0F2F5] text-slate-900 font-sans">

    <header class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="text-xl font-black text-indigo-600 tracking-tighter">TEA RENTAL</div>
            
            <nav class="flex space-x-1">
                @foreach([
                    ['Dashboard', 'dashboard'],
                    ['Data Mobil', 'mobil.index'],
                    ['Data Penyewa', 'penyewa.index'],
                    ['Administrasi', 'transaksi.index']
                ] as $item)
                    <a href="{{ route($item[1]) }}" 
                       class="px-5 py-2 rounded-full transition-all 
                       {{ request()->routeIs($item[1]) ? 'bg-indigo-100 text-indigo-700 font-bold' : 'text-slate-600 hover:bg-slate-100' }}">
                        {{ $item[0] }}
                    </a>
                @endforeach
            </nav>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm text-slate-400 hover:text-red-600">Logout</button>
            </form>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-10">
       <main class="max-w-7xl mx-auto px-6 py-10">
    <div class="bg-white rounded-3xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 min-h-[60vh]">
        <main class="max-w-7xl mx-auto px-6 py-10">
    <div class="bg-white rounded-3xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 min-h-[60vh]">
        <div class="flex-1">
            {{ $slot }}
        </div>
    </div>
</main>
</main>
</div>
</div>

</body>
</html>