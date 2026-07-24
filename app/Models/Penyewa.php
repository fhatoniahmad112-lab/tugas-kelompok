<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    // Ini mengizinkan kolom-kolom ini diisi melalui form
    protected $fillable = ['nama', 'nik', 'alamat', 'telepon'];
}