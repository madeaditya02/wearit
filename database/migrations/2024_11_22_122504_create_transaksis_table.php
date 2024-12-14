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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->unsignedBigInteger('id_user');
            $table->timestamp('waktu_transaksi');
            $table->integer('estimasi_total');
            $table->string('jenis_pengantaran');
            $table->integer('ongkir');
            $table->integer('total_harga');
            $table->string('status_transaksi');
            $table->unsignedBigInteger('id_alamat');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_alamat')->references('id_alamat')->on('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
