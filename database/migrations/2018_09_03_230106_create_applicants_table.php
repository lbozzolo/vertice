<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicantsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('name', '50');
            $table->string('lastname', '50');
            $table->string('email');
            $table->string('phone');
            $table->integer('country');
            $table->integer('province')->nullable();
            $table->string('position', '255')->nullable();
            $table->string('company', '255')->nullable();
            $table->string('area', '255')->nullable();
            $table->text('text', '1000')->nullable();

            $table->index('id');

            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applicants');
    }
}
