<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up()
    {
        Schema::create('borrow_histories', function (Blueprint $table) {
            $table->id();
            $table->string('borrower_id');
            $table->string('borrower_name');
            $table->unsignedBigInteger('tool_id')->nullable();
            $table->integer('amount');
            $table->date('borrow_date');
            $table->date('return_date')->nullable();
            $table->enum('action', ['approved', 'rejected', 'pending'])->default('pending');
            $table->timestamps();

            $table->foreign('tool_id')->references('id')->on('tools')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrow_histories');
    }
};
