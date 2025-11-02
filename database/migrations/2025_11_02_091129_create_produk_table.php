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
            $table->id('produk_id');
            $table->string('nama', 150);
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 10, 2)->default(0);
            $table->string('gambar')->nullable();
            $table->unsignedBigInteger('kategori_id')->nullable();
            $table->unsignedBigInteger('penjual_id')->nullable();
            $table->decimal('rata_rata_rating', 3, 2)->default(0);
            $table->timestamps();

            // Foreign key
            $table->foreign('kategori_id')->references('kategori_id')->on('kategori')->onDelete('set null');
            $table->foreign('penjual_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
