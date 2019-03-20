<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHdebcredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hdebcred', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('num_liq')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->double('legajo')->nullable();
            $table->decimal('importe', 15, 2)->nullable();
            $table->string('pat', 1)->nullable();
            $table->smallInteger('codmov')->nullable();

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
        Schema::drop('hdebcred');
    }
}
