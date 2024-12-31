<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('peminjaman_mhs', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->string('nama');
            $table->string('nim');
            $table->string('email');
            $table->string('notelp');
            $table->string('alat');
            $table->integer('jumlah_alat');
            $table->date('tanggal_peminjaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_mhs');
    }
};
