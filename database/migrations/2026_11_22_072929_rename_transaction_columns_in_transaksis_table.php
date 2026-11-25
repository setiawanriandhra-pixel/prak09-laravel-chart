<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->renameColumn(
                'Tanggal_transaksi',
                'tanggal_transaksi'
            );

            $table->renameColumn(
                'Jumlah_penjualan',
                'jumlah_penjualan'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->renameColumn(
                'tanggal_transaksi',
                'Tanggal_transaksi'
            );

            $table->renameColumn(
                'jumlah_penjualan',
                'Jumlah_penjualan'
            );
        });
    }
};