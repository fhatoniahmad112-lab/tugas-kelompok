<x-app-layout>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Data Mobil</h2>
        <a href="{{ route('mobil.create') }}" 
           class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg font-semibold shadow-sm transition">
            + Tambah Mobil Baru
        </a>
    </div>

    <div class="bg-white shadow-sm border border-gray-100 rounded-xl overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 text-gray-600 uppercase text-xs tracking-wider">
                    <th class="p-4">NO</th>
                    <th class="p-4">MEREK MOBIL</th>
                    <th class="p-4">PLAT NOMOR</th>
                    <th class="p-4">WARNA</th>
                    <th class="p-4">HARGA SEWA / HARI</th>
                    <th class="p-4">AKSI</th> 
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($mobils as $index => $mobil)
                <tr class="hover:bg-gray-50 transition">
                    <td class="p-4 text-gray-600 font-medium">{{ $index + 1 }}</td>
                    <td class="p-4 font-semibold text-gray-800">{{ $mobil->merek }}</td>
                    <td class="p-4 text-gray-600">{{ $mobil->plat_nomor }}</td>
                    <td class="p-4 text-gray-600">{{ $mobil->warna }}</td>
                    <td class="p-4 font-mono text-indigo-600">Rp {{ number_format($mobil->harga_sewa, 0, ',', '.') }}</td>

                    <td class="p-4 flex items-center gap-2">
                        <a href="{{ route('mobil.edit', $mobil->id) }}" 
                           class="px-3 py-1.5 bg-white border border-gray-200 text-gray-700 rounded-md hover:bg-gray-100 transition text-sm font-medium">
                            Edit
                        </a>

                        <form action="{{ route('mobil.destroy', $mobil->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus mobil ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-3 py-1.5 bg-red-50 text-red-600 border border-red-100 rounded-md hover:bg-red-100 transition text-sm font-medium">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-10 text-center text-gray-500">
                        <div class="flex flex-col items-center">
                            <p>Data mobil belum tersedia.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>