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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->uuid('id_produk');
            $table->string('nama_produk');
            // $table->integer('jumlah');
            $table->integer('harga_produk');
            $table->string('jenis_produk');
            $table->string('gambar_produk');
            $table->text('deskripsi_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
