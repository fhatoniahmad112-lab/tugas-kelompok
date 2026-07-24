<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    // Tambahkan baris ini
    protected $fillable = [
        'mobil_id', 
        'penyewa_id', 
        'tanggal_pinjam', 
        'tanggal_kembali', 
        'status'
    ];

 public function mobil() 
{
    return $this->belongsTo(Mobil::class);
}

public function penyewa() 
{
    return $this->belongsTo(Penyewa::class);
}
}