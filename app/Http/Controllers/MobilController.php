<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Transaksi; // <--- Tambahkan ini
use Illuminate\Http\Request;

class MobilController extends Controller
{
    // Menampilkan daftar mobil
    public function index()
{
    // Mengambil semua data mobil untuk tabel
    $mobils = Mobil::all();
    
    // Menghitung data untuk statistik Bento Grid
    $totalMobil = Mobil::count();
    $mobilDisewa = Transaksi::where('status', 'disewa')->count();

    // Kirim semua variabel ke view
    return view('mobil.mobil_index', compact('mobils', 'totalMobil', 'mobilDisewa'));
}

    // Menampilkan form tambah mobil
    public function create()
    {
        return view('mobil.mobil_tambah');
    }

    // Menyimpan data mobil baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_mobil' => 'required|unique:mobils',
            'merek'      => 'required',
            'plat_nomor' => 'required',
            'warna'      => 'required',
            'harga_sewa' => 'required|numeric',
        ]);

        Mobil::create($request->all());

        return redirect()->route('mobil.index')->with('sukses', 'Data berhasil disimpan!');
    }

    public function edit($id) 
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.mobil_edit', compact('mobil'));
    }

    public function update(Request $request, $id) 
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->update($request->all());
        return redirect()->route('mobil.index')->with('sukses', 'Data berhasil diperbarui!');
    }

    public function destroy($id) 
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobil.index')->with('sukses', 'Data berhasil dihapus!');
    }
}