<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->index('id');

            $table->foreign('project_id')->references('id')->on('projects')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::drop('categories_projects');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
