<x-app-layout>
    <div class="max-w-4xl mx-auto">
        <div class="mb-8">
            <h2 class="text-3xl font-black text-slate-800">Tambah Armada Baru</h2>
            <p class="text-slate-500">Lengkapi data mobil untuk Tea Rental.</p>
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200">
            <form action="{{ route('mobil.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Kode Mobil</label>
                        <input type="text" name="kode_mobil" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required placeholder="Contoh: T-001">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Merek Mobil</label>
                        <input type="text" name="merek" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required placeholder="Contoh: Toyota Avanza">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Plat Nomor</label>
                        <input type="text" name="plat_nomor" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required placeholder="B 1234 XYZ">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Warna</label>
                        <input type="text" name="warna" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required placeholder="Contoh: Putih Metalik">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-bold text-slate-700 mb-2">Harga Sewa per Hari (Rp)</label>
                        <input type="number" name="harga_sewa" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required placeholder="Contoh: 350000">
                    </div>
                </div>

                <div class="flex items-center justify-end gap-4 pt-6 border-t border-slate-100">
                    <a href="{{ route('mobil.index') }}" class="px-6 py-3 text-slate-600 font-bold hover:text-slate-900 transition">Batal</a>
                    <button type="submit" class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-2xl shadow-lg transition">
                        Simpan Mobil
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>