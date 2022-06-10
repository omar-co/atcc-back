<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Process\Process;

class CreateCatalogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogos', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('ciclo',)->nullable();
            $table->integer('id_ramo',)->nullable();
            $table->string('desc_ramo')->nullable();
            $table->string('id_ur',30)->nullable();
            $table->string('desc_ur')->nullable();
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
            $table->mediumText('desc_pp')->nullable();
            $table->integer('id_capitulo',)->nullable();
            $table->string('desc_capitulo')->nullable();
            $table->integer('id_concepto',)->nullable();
            $table->string('desc_concepto')->nullable();
            $table->integer('id_partida_generica',)->nullable();
            $table->string('desc_partida_generica')->nullable();
            $table->integer('id_partida_especifica',)->nullable();
            $table->string('desc_partida_especifica')->nullable();
            $table->integer('id_tipogasto',)->nullable();
            $table->string('desc_tipogasto')->nullable();
            $table->integer('id_ff',)->nullable();
            $table->string('desc_ff')->nullable();
            $table->integer('id_entidad_federativa',)->nullable();
            $table->string('entidad_federativa')->nullable();
            $table->string('id_clave_cartera',30)->nullable();
            $table->string('monto_aprobado')->nullable();
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
        Schema::dropIfExists('catalogos');
    }
}
