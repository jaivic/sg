<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->tinyInteger('type')->unsigned()->default(0);
            $table->string('image')->nullable();
            $table->string('postback');
            $table->integer('visits')->unsigned()->default(0);
            $table->integer('likes')->unsigned()->default(0);
            $table->tinyInteger('status')->unsigned()->default(0);
            $table->integer('user_id')->unsigned();

            $table->timestamps();
        });
        Schema::table('posts', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('posts');
    }

}
