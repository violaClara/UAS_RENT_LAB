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
        Schema::table('borrow_histories', function (Blueprint $table) {
            $table->string('borrower_type')->nullable()->after('borrower_name');
        });
    }

    public function down()
    {
        Schema::table('borrow_histories', function (Blueprint $table) {
            $table->dropColumn('borrower_type');
        });
    }
};
