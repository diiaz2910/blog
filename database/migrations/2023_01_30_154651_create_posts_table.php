<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug');

            $table->text('extract')->nullable();
            $table->longText('body')->nullable();

            $table->enum('status', [1,2])->default(1); //Any new post will have a default value which means that it is a draft post. enum will only accept more than one argument.

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //user_id makes reference to id on users table. If a user is deleted, his posts do so.
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); //category_id makes reference to id on categories table. If a category is deleted, their posts do so. 

            

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
        Schema::dropIfExists('posts');
    }
};
