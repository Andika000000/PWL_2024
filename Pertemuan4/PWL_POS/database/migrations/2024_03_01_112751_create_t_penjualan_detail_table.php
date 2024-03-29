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
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('penjualan_id')->index(); //index FK t_penjualan
            $table->unsignedBigInteger('barang_id')->index(); //index FK m_barang
            $table->integer('harga');
            $table->integer('jumlah');
            $table->timestamps();

            //FK penjualan_id dengan penjualan_id pada tabel t_penjualan
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan');
            //FK barang_id dengan barang_id pada tabel m_barang
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
