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
        Schema::create('ukuran_produk', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produk');
            $table->string('ukuran');
            $table->integer('tersedia');
            $table->foreign('id_produk')->references('id')->on('produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukuran_produks');
    }
};
