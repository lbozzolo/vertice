<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorsInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors_insumos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('color_id')->unsigned();
            $table->integer('insumo_id')->unsigned();

            $table->index('id');
            $table->index('color_id');
            $table->index('insumo_id');

            $table->foreign('color_id')
                ->references('id')
                ->on('colors')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('insumo_id')
                ->references('id')
                ->on('insumos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('colors_insumos');
    }
}
