<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Transaksi</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('transaksi.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label>Pilih Mobil</label>
                        <select name="mobil_id" class="w-full border p-2 rounded">
                            @foreach($mobils as $m)
                                <option value="{{ $m->id }}">{{ $m->merek }} - {{ $m->plat_nomor }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label>Pilih Penyewa</label>
                        <select name="penyewa_id" class="w-full border p-2 rounded">
                            @foreach($penyewas as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label>Tanggal Pinjam</label>
                        <input type="date" name="tanggal_pinjam" class="w-full border p-2 rounded" required>
                    </div>
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan Transaksi</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>