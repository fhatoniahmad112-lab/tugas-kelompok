<?php

namespace App\Http\Controllers;

use App\Models\Mobil;      // <--- Tambahkan ini
use App\Models\Penyewa;    // <--- Tambahkan ini
use App\Models\Transaksi;  // <--- Tambahkan ini
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index() 
    {
        $transaksis = Transaksi::with(['mobil', 'penyewa'])->latest()->get();
        return view('transaksi.transaksi_index', compact('transaksis'));
    }
    public function create() 
    {
        $mobils = Mobil::all();
        $penyewas = Penyewa::all();
        return view('transaksi.transaksi_tambah', compact('mobils', 'penyewas'));
    }

    public function store(Request $request) 
    {
            
        $request->validate([
            'mobil_id' => 'required',
            'penyewa_id' => 'required',
            'tanggal_pinjam' => 'required|date',
            ]);

            
        \App\Models\Transaksi::create($request->except('_token'));

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil disimpan!');
    }
    public function kembalikan($id) {
        $transaksi = Transaksi::findOrFail($id);
        
        $transaksi->update([
            'status' => 'dikembalikan',
            'tanggal_kembali' => now(), // Mencatat tanggal hari ini
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Mobil berhasil dikembalikan!');
    }
    public function laporan() 
    {
        $transaksis = Transaksi::with(['mobil', 'penyewa'])->get();
        return view('transaksi.laporan', compact('transaksis'));
    }
}
