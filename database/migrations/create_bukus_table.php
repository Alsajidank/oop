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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('judul');
            $table->string('penulis');
            $table->string('penerbit');
            $table->integer('jumlah_halaman');
            $table->integer('jumlah_buku'); // Jumlah buku yang tersedia
            $table->timestamps(); // Untuk created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
