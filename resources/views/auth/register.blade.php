<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#F0F2F5]">
        
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-black text-slate-800 tracking-tighter">TEA<span class="text-indigo-600">RENTAL</span></h1>
            <p class="text-slate-500 mt-2">Daftarkan akun admin baru.</p>
        </div>

        <div class="w-full sm:max-w-md bg-white p-10 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100">
            
            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                    <input type="text" name="name" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Email</label>
                    <input type="email" name="email" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Password</label>
                    <input type="password" name="password" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-slate-700 mb-2">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required>
                </div>

                <button type="submit" class="w-full py-4 mt-4 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-2xl shadow-lg transition">
                    Daftar Sekarang
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-slate-500">
                Sudah punya akun? 
                <a href="{{ route('login') }}" class="text-indigo-600 font-bold hover:underline">Masuk di sini</a>
            </p>
        </div>

        <p class="mt-8 text-sm text-slate-400">© 2026 Tea Rental System</p>
    </div>
</x-guest-layout>