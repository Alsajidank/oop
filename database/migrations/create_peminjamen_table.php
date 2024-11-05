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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('pengguna_id')->constrained('penggunas'); // Relasi ke tabel pengguna
            $table->foreignId('buku_id')->constrained('bukus'); // Relasi ke tabel buku
            $table->date('tanggal_pinjam'); // Tanggal peminjaman
            $table->date('tanggal_kembali')->nullable(); // Tanggal pengembalian (bisa null jika belum dikembalikan)
            $table->enum('status', ['dipinjam', 'dikembalikan']); // Status peminjaman
            $table->timestamps(); // Untuk created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
