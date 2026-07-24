<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function index() 
    {
        $penyewas = Penyewa::all();
        return view('penyewa.penyewa_index', compact('penyewas'));
    }

    public function create() {
        return view('penyewa.penyewa_tambah');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:penyewas',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        Penyewa::create($request->all());
        return redirect()->route('penyewa.index')->with('sukses', 'Data penyewa berhasil disimpan!');
    }
}