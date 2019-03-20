<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcumcredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acumcred', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('matricula')->nullable();
            $table->string('mes', 15)->nullable();
            $table->smallInteger('ano')->nullable();
            $table->decimal('monto', 13, 2)->nullable();
            $table->string('recibo', 1)->nullable();
            $table->dateTime('fecha')->nullable();

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
        Schema::drop('acumcred');
    }
}
