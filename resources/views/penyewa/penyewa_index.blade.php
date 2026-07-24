<x-app-layout>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Data Penyewa</h2>
        <a href="{{ route('penyewa.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded">
            + Tambah Penyewa Baru
        </a>
    </div>

    <div class="bg-white p-6 shadow rounded-lg">
        <table class="w-full text-left">
            <thead>
                <tr class="text-gray-500 uppercase text-sm border-b">
                    <th class="p-3">NO</th>
                    <th class="p-3">NAMA LENGKAP</th>
                    <th class="p-3">NIK</th>
                    <th class="p-3">ALAMAT</th>
                    <th class="p-3">TELEPON</th>
                    <th class="p-3">AKSI</th> </tr>
                </tr>
            </thead>
            <tbody>
                @forelse($penyewas as $index => $p)
    <tr class="border-b hover:bg-gray-50">
        <td class="p-3">{{ $index + 1 }}</td>
        <td class="p-3">{{ $p->nama }}</td>
        <td class="p-3">{{ $p->nik }}</td>
        <td class="p-3">{{ $p->alamat }}</td>
        <td class="p-3">{{ $p->telepon }}</td>
        
        <td class="p-3 flex items-center gap-2">
            <a href="{{ route('penyewa.edit', $p->id) }}" 
               class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">
                Edit
            </a>

            <form action="{{ route('penyewa.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data penyewa ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="6" class="p-4 text-center text-gray-500">Data penyewa belum tersedia.</td>
    </tr>
@endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>