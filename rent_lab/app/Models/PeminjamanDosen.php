<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanDosen extends Model
{
    use HasFactory;
    protected $table = 'peminjaman_dosens';

    protected $fillable = [
        'status',
        'nama',
        'nip',
        'email',
        'notelp',
        'alat',
        'jumlah_alat',
        'tanggal_peminjaman',
    ];
}
