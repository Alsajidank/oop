<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable = ['pengguna_id', 'buku_id', 'tanggal_pinjam', 'tanggal_kembali', 'status'];

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
