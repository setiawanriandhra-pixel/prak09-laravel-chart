
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

if (!Schema::hasTable('transaksis')) {
    Artisan::call('migrate', ['--force' => true]);
}

Route::get('/', [TransaksiController::class, 'index'])
    ->name('transaksi.index');

Route::post('/transaksi', [TransaksiController::class, 'store'])
    ->name('transaksi.store');
