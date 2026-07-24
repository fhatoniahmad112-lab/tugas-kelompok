<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Semua rute manajemen (Mobil, Penyewa, Transaksi) harus di dalam middleware auth
Route::middleware(['auth'])->group(function () {
    
    // Rute Mobil (Menggunakan Resource otomatis)
    Route::resource('mobil', MobilController::class);

    // Rute Penyewa
    Route::get('/penyewa', [PenyewaController::class, 'index'])->name('penyewa.index');
    Route::get('/penyewa/tambah', [PenyewaController::class, 'create'])->name('penyewa.create');
    Route::post('/penyewa/store', [PenyewaController::class, 'store'])->name('penyewa.store');
    Route::get('/penyewa/{id}/edit', [PenyewaController::class, 'edit'])->name('penyewa.edit');
    Route::delete('/penyewa/{id}', [PenyewaController::class, 'destroy'])->name('penyewa.destroy');

    // Rute Transaksi
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/transaksi/tambah', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::patch('/transaksi/{id}/kembalikan', [TransaksiController::class, 'kembalikan'])->name('transaksi.kembalikan');
    Route::get('/transaksi/laporan', [TransaksiController::class, 'laporan'])->name('transaksi.laporan');
});

// Dashboard dan Profile
Route::get('/dashboard', function () {
    return view('dashboard', [
        'totalMobil' => \App\Models\Mobil::count(),
        'sedangDipinjam' => \App\Models\Transaksi::where('status', '!=', 'dikembalikan')->count()
    ]);
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';