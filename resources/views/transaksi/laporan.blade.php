<div class="p-8">
    <h1 class="text-2xl font-bold mb-4">Laporan Peminjaman Mobil</h1>
    <p>Dicetak pada: {{ date('d-m-Y') }}</p>
    
    <table class="w-full mt-6 border-collapse border">
        <tr class="bg-gray-800 text-white">
            <th class="border p-2">Penyewa</th>
            <th class="border p-2">Mobil</th>
            <th class="border p-2">Tgl Pinjam</th>
            <th class="border p-2">Tgl Kembali</th>
            <th class="border p-2">Status</th>
        </tr>
        @foreach($transaksis as $t)
        <tr>
            <td class="border p-2">{{ $t->penyewa->nama }}</td>
            <td class="border p-2">{{ $t->mobil->merek }}</td>
            <td class="border p-2">{{ $t->tanggal_pinjam }}</td>
            <td class="border p-2">{{ $t->tanggal_kembali ?? '-' }}</td>
            <td class="border p-2">{{ $t->status }}</td>
        </tr>
        @endforeach
    </table>
    
    <button onclick="window.print()" class="mt-4 bg-gray-600 text-white px-4 py-2 rounded">Cetak Laporan</button>
</div>