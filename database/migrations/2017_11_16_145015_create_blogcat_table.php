<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateblogcatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogcat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supercat_id')->unsigned();
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->text('excerpt');
            $table->string('img');
            $table->timestamps();
            

            // $table->foreign('supercat_id')
            //     ->references('id')->on('blogsupercat')
            //     ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogcat');
    }
}
