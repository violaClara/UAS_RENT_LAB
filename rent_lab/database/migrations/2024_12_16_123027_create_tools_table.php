<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tools', function (Blueprint $table) {
            $table->id('tool_id'); // Kolom ID unik
            $table->string('tool_name'); // Nama alat
            $table->string('tool_code')->unique(); // Kode unik alat
            $table->text('description')->nullable(); // Deskripsi alat
            $table->integer('quantity'); // Jumlah total alat
            $table->integer('available_quantity'); // Jumlah alat yang masih tersedia
            $table->enum('status', ['available', 'unavailable'])->default('available'); // Status ketersediaan
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tools');
    }
};
