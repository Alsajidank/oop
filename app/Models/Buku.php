<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'penulis', 'penerbit', 'jumlah_halaman', 'jumlah_buku'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
