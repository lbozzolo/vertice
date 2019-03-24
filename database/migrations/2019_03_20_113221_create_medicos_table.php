<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('activo',1)->nullable();
            $table->integer('matricula')->nullable();
            $table->string('categoria',1)->nullable();
            $table->string('apynom',45)->nullable();
            $table->string('direccion',45)->nullable();
            $table->string('telefon1',14)->nullable();
            $table->string('telefon2',14)->nullable();
            $table->string('tipo_docu',3)->nullable();
            $table->string('num_docu',8)->nullable();
            $table->string('cuit',13)->nullable();
            $table->string('ing_brut',12)->nullable();
            $table->string('tiporesp',2)->nullable();
            $table->string('tipo_liq',1)->nullable();
            $table->decimal('amghi',5,2)->nullable();
            $table->decimal('cpsm',5,2)->nullable();
            $table->decimal('ibrut',5,2)->nullable();
            $table->decimal('hospitalv',5,2)->nullable();
            $table->decimal('amghivext',5,2)->nullable();
            $table->decimal('hospitalp',5,2)->nullable();
            $table->smallInteger('codhtal')->nullable();
            $table->smallInteger('codhtal1')->nullable();
            $table->smallInteger('codhtal2')->nullable();
            $table->smallInteger('codhtal3')->nullable();
            $table->smallInteger('codhtal4')->nullable();
            $table->smallInteger('codhtal5')->nullable();
            $table->smallInteger('codhtal6')->nullable();
            $table->smallInteger('suc')->nullable();
            $table->integer('cta')->nullable();
            $table->tinyInteger('dig')->nullable();
            $table->tinyInteger('tipocta')->nullable();
            $table->string('clave', 8)->nullable();
            $table->string('email', 35)->nullable();
            $table->string('impconsext', 1)->nullable();
            $table->string('dpto', 25)->nullable();
            $table->string('servicio',25)->nullable();
            $table->string('escalafon',15)->nullable();
            $table->enum('certificad', ['T', 'F'])->nullable();
            $table->enum('retencione', ['T', 'F'])->nullable();
            $table->enum('consultori', ['T', 'F'])->nullable();
            $table->string('especialid',30)->nullable();
            $table->decimal('consulta',10,2)->nullable();
            $table->longText('anotacione')->nullable();
            $table->integer('numamp')->nullable();
            $table->string('socio',8)->nullable();
            $table->char('sh',1)->nullable();

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
        Schema::drop('medicos');
    }
}
