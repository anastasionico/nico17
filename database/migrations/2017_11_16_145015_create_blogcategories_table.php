<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogcategories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supercategory_id')->unsigned();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->string('img');
            $table->timestamps();
            

            $table->foreign('supercategory_id')
                ->references('id')->on('blogsupercategories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogcategories');
    }
}
