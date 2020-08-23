<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->integer('category_id')->index();
            $table->integer('photo_id');
            $table->tinyInteger('published')->default(0);
            $table->float('rating_cache', 2, 1)->default(3.0);
            $table->unsignedInteger('rating_count')->default(0);
            $table->string('phone');
            $table->string('city');
            $table->string('state');
            $table->text('address');
            $table->text('description');
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
}
