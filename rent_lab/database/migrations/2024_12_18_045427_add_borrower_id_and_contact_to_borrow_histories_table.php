<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   public function up()
    {
        Schema::table('borrow_histories', function (Blueprint $table) {
            $table->string('borrower_id')->after('borrower_name');
            $table->string('contact')->after('borrower_id');
        });
    }
    
    public function down()
    {
        Schema::table('borrow_histories', function (Blueprint $table) {
            $table->dropColumn(['borrower_id', 'contact']);
        });
    }
};
