<x-app-layout>
    <!-- Header dengan Ucapan Selamat Datang -->
    <div class="bg-indigo-600 rounded-2xl p-8 text-white mb-8 shadow-lg">
        <h2 class="text-3xl font-bold">Halo, Admin! 👋</h2>
        <p class="opacity-90 mt-2 text-lg">Cek <strong>Tea Rental</strong>. Kelola armada dan transaksi Anda dengan mudah hari ini.</p>
    </div>

    <!-- Statistik Utama -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        
        <!-- Total Armada -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transition hover:shadow-md">
            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider">Total Armada</h3>
            <p class="text-4xl font-extrabold text-gray-900 mt-2">{{ $totalMobil }}</p>
            <div class="mt-2 text-sm text-indigo-600 font-medium">Unit tersedia</div>
        </div>

        <!-- Sedang Disewa -->
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 border-l-4 border-green-500 transition hover:shadow-md">
            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider">Sedang Disewa</h3>
            <p class="text-4xl font-extrabold text-gray-900 mt-2">{{ $sedangDipinjam }}</p>
            <div class="mt-2 text-sm text-green-600 font-medium">Unit dalam perjalanan</div>
        </div>

    </div>

    <!-- Quick Actions (Tombol Cepat) -->
    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Aksi Cepat</h3>
        <div class="flex gap-4">
            <a href="{{ route('mobil.create') }}" class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-lg font-medium hover:bg-indigo-100 transition">
                + Tambah Mobil
            </a>
            <a href="{{ route('transaksi.create') }}" class="px-4 py-2 bg-green-50 text-green-600 rounded-lg font-medium hover:bg-green-100 transition">
                + Transaksi Baru
            </a>
        </div>
    </div>
</x-app-layout>