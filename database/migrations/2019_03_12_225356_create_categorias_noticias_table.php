<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias_noticias', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('noticia_id')->unsigned();
            $table->integer('categoria_id')->unsigned();

            $table->index('id');

            $table->foreign('noticia_id')->references('id')->on('noticias')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onUpdate('CASCADE')->onDelete('CASCADE');
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
        Schema::drop('categorias_noticias');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
