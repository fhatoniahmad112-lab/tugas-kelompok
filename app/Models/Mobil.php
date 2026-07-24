<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['kode_mobil', 'merek', 'plat_nomor', 'warna', 'harga_sewa'];
}