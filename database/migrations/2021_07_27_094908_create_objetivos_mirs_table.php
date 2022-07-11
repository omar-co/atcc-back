<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateObjetivosMirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objetivos_mirs', function (Blueprint $table) {
            $table->id();
            $table->integer('ciclo',)->nullable();
            $table->integer('id_ramo',)->nullable();
            $table->string('desc_ramo')->nullable();
            $table->string('id_ur')->nullable();
            $table->string('desc_ur')->nullable();
            $table->string('id_entidad_federativa')->nullable();
            $table->string('entidad_federativa')->nullable();
            $table->string('id_municipio')->nullable();
            $table->string('municipio')->nullable();
            $table->integer('gpo_funcional',)->nullable();
            $table->string('desc_gpo_funcional')->nullable();
            $table->integer('id_funcion',)->nullable();
            $table->string('desc_funcion')->nullable();
            $table->integer('id_subfuncion',)->nullable();
            $table->string('desc_subfuncion')->nullable();
            $table->integer('id_ai',)->nullable();
            $table->string('desc_ai')->nullable();
            $table->string('id_modalidad')->nullable();
            $table->string('desc_modalidad')->nullable();
            $table->integer('id_pp',)->nullable();
            $table->string('desc_pp')->nullable();
            $table->string('modalidad_pp')->nullable();
            $table->integer('id_pnd',)->nullable();
            $table->tinyText('desc_pnd')->nullable();
            $table->tinyText('objetivo_pnd')->nullable();
            $table->string('programa_pnd')->nullable();
            $table->string('desc_programa_pnd')->nullable();
            $table->string('objetivo_programa_pnd')->nullable();
            $table->string('desc_objetivo_programa_pnd')->nullable();
            $table->string('objetivo_estrategico')->nullable();
            $table->integer('id_matriz',)->nullable();
            $table->string('desc_matriz')->nullable();
            $table->integer('id_objetivo',)->nullable();
            $table->integer('id_objetivo_padre',)->nullable();
            $table->text('desc_objetivo')->nullable();
            $table->string('supuestos')->nullable();
            $table->integer('id_nivel',)->nullable();
            $table->tinyText('desc_nivel')->nullable();
            $table->string('liga')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objetivos_mirs');
    }
}
