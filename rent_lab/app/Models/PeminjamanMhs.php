<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanMhs extends Model
{
    use HasFactory;
    protected $table = 'peminjaman_mhs'; // Nama tabel

    protected $fillable = [
        'status',
        'nama',
        'nim',
        'email',
        'notelp',
        'alat',
        'jumlah_alat',
        'tanggal_peminjaman',
    ];
}
