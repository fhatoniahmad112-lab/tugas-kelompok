<x-app-layout>
    <div class="max-w-3xl">
        <div class="mb-8">
            <h2 class="text-3xl font-black text-slate-800">Tambah Penyewa Baru</h2>
            <p class="text-slate-500">Lengkapi data diri penyewa untuk sistem Tea Rental.</p>
        </div>

        <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200">
            <form action="{{ route('penyewa.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="nama" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required placeholder="Masukkan nama lengkap">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">NIK</label>
                        <input type="text" name="nik" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required placeholder="Masukkan NIK KTP">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Alamat</label>
                        <textarea name="alamat" rows="2" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required placeholder="Masukkan alamat lengkap"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-slate-700 mb-2">Nomor Telepon</label>
                        <input type="text" name="telepon" class="w-full p-4 rounded-2xl bg-slate-50 border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none transition" required placeholder="Contoh: 0812...">
                    </div>
                </div>

                <div class="flex items-center justify-end gap-4 pt-6 border-t border-slate-100">
                    <a href="{{ route('penyewa.index') }}" class="px-6 py-3 text-slate-600 font-bold hover:text-slate-900 transition">Batal</a>
                    <button type="submit" class="px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-2xl shadow-lg transition">
                        Simpan Penyewa
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>