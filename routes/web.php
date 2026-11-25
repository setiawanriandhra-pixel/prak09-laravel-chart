<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

Route::get('/setup-db', function () {
    Artisan::call('migrate', ['--force' => true]);
    return "Migrasi database selesai! Silakan kembali ke halaman utama.";
});

Route::get('/', function () {
    if (!Schema::hasTable('transaksis')) {
        Artisan::call('migrate', ['--force' => true]);
    }
    return app(TransaksiController::class)->index();
})->name('transaksi.index');

Route::post('/transaksi', [TransaksiController::class, 'store'])
    ->name('transaksi.store');