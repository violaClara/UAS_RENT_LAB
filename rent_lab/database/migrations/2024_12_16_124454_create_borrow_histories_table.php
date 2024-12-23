<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('borrow_histories', function (Blueprint $table) {
            $table->id('history_id'); // ID unik riwayat
            $table->string('borrower_name', 100); // Nama peminjam
            $table->unsignedBigInteger('tool_id'); // ID alat yang dipinjam (relasi ke tabel tools)
            $table->date('borrow_date'); // Tanggal mulai peminjaman
            $table->date('return_date'); // Tanggal pengembalian
            $table->integer('amount'); // Jumlah alat yang dipinjam
            $table->enum('action', ['approved', 'rejected']); // Status final peminjaman
            $table->timestamps(); // Kolom created_at dan updated_at

            // Foreign key ke tabel tools
            $table->foreign('tool_id')->references('tool_id')->on('tools')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrow_histories');
    }
};
