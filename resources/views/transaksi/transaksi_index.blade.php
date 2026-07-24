<x-app-layout>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Data Administrasi</h2>
        <div class="space-x-2">
            <a href="{{ route('transaksi.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded">
                + Tambah Transaksi
            </a>
            <a href="{{ route('transaksi.laporan') }}" target="_blank" class="bg-gray-600 text-white px-4 py-2 rounded">
                Cetak Laporan PDF
            </a>
        </div>
    </div>

    <div class="bg-white p-6 shadow rounded-lg">
        <table class="w-full text-left">
            <thead>
                <tr class="text-gray-500 uppercase text-sm border-b">
                    <th class="p-3">Mobil</th>
                    <th class="p-3">Penyewa</th>
                    <th class="p-3">Tgl Pinjam</th>
                    <th class="p-3">Status</th>
                    <th class="p-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($transaksis as $t)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $t->mobil->merek }}</td>
                    <td class="p-3">{{ $t->penyewa->nama }}</td>
                    <td class="p-3">{{ \Carbon\Carbon::parse($t->tanggal_pinjam)->format('d-m-Y') }}</td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-xs font-bold {{ $t->status == 'dipinjam' ? 'bg-orange-100 text-orange-700' : 'bg-green-100 text-green-700' }}">
                            {{ strtoupper($t->status) }}
                        </span>
                    </td>
                    <td class="p-3 text-center">
                        @if($t->status == 'dipinjam')
                            <form action="{{ route('transaksi.kembalikan', $t->id) }}" method="POST">
                                @csrf @method('PATCH')
                                <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded text-xs hover:bg-blue-700">
                                    Kembalikan
                                </button>
                            </form>
                        @else
                            <span class="text-gray-400 text-sm">-</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">Belum ada data transaksi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>