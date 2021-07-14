<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPostEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_entry', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('user_id');//ユーザーID
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_entry', function (Blueprint $table) {
            //
            $table->dropcolumn('post_entry');
        });
    }
}
