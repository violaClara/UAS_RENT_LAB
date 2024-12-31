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
        Schema::create('peminjaman_dosens', function (Blueprint $table) {
            $table->id();
            $table->string('status'); // Status: Dosen / Staff Akademik
            $table->string('nama');
            $table->string('nip'); // NIP
            $table->string('email');
            $table->string('notelp');
            $table->string('alat'); // Nama alat
            $table->integer('jumlah_alat'); // Jumlah alat yang dipinjam
            $table->date('tanggal_peminjaman'); // Tanggal peminjaman
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_dosens');
    }
};
