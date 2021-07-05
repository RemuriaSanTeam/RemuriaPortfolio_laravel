<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_entry', function (Blueprint $table) {
            $table->id();
            $table->string("title");//タイトル
            $table->string("author");//投稿者名
            $table->string("image");//投稿画像
            $table->string("body");//本文
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_entry');
    }
}
