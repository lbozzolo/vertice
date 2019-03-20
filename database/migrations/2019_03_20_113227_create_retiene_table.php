<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetieneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retiene', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('matricula')->nullable();
            $table->integer('num_liq')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->decimal('total', 13,2)->nullable();
            $table->decimal('amghi', 13,2)->nullable();
            $table->decimal('cpsm', 13,2)->nullable();
            $table->decimal('hosp', 13,2)->nullable();
            $table->decimal('ing_brut', 13,2)->nullable();
            $table->decimal('ganancias', 13,2)->nullable();
            $table->decimal('acredita', 13,2)->nullable();
            $table->decimal('descuent', 13,2)->nullable();
            $table->decimal('cobrado', 13,2)->nullable();
            $table->string('pat', 1)->nullable();
            $table->bigInteger('certifi')->nullable();
            $table->decimal('iva21', 13,2)->nullable();
            $table->decimal('iva10', 13,2)->nullable();


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
        Schema::drop('retiene');
    }
}
