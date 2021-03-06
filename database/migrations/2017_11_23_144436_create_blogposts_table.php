<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogposts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('excerpt');
            $table->string('keywords');
            $table->longText('content');
            $table->unsignedTinyInteger('status');
            $table->unsignedTinyInteger('order');
            $table->string('img');
            $table->timestamps();
            $table->unsignedTinyInteger('minutes_to_read')->nullable();
            $table->string('cta_link')->nullable();
            $table->date('published_at')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogposts');
    }
}
