<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistLiqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hist_liq', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('matricula')->nullable();
            $table->integer('carpeta')->nullable();
            $table->decimal('monto', 13, 2)->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('descripcion', 40)->nullable();
            $table->integer('num_liq')->nullable();
            $table->dateTime('fecha_l')->nullable();
            $table->decimal('amghi', 13, 2)->nullable();
            $table->decimal('cpsm', 13, 2)->nullable();
            $table->decimal('ibrut', 13, 2)->nullable();
            $table->decimal('hosp', 13, 2)->nullable();
            $table->string('tipodes', 40)->nullable();
            $table->decimal('iva21', 13, 2)->nullable();
            $table->decimal('iva10', 13, 2)->nullable();
            $table->string('coldiqui', 2)->nullable();
            $table->decimal('neto', 13, 2)->nullable();

            $table->index('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hist_liq');
    }
}
