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
       Schema::create('produk_varian', function (Blueprint $table) {
            $table->id('varian_id');
            $table->unsignedBigInteger('produk_id');
            $table->string('ukuran', 20)->nullable(); 
            $table->string('warna', 30)->nullable();  
            $table->integer('stok')->default(0);
            $table->decimal('harga', 10, 2)->nullable();
            $table->timestamps();

            $table->foreign('produk_id')->references('produk_id')->on('produk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_varian');
    }
};
