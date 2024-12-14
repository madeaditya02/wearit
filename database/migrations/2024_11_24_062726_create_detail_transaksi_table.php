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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id('id_detail');
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_transaksi');
            $table->unsignedBigInteger('id_diskon')->nullable();
            $table->string('size_produk');
            $table->integer('quantity');
            $table->foreign('id_produk')->references('id')->on('produk')->onDelete('cascade');
            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi');
            $table->foreign('id_diskon')->references('id_diskon')->on('diskon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
