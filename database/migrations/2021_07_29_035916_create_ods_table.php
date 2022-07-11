<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ods', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ramo',)->nullable();
            $table->string('ciclo');
            $table->text('desc_ramo')->nullable();
            $table->string('id_modalidad')->nullable();
            $table->text('desc_modalidad')->nullable();
            $table->integer('id_pp',)->nullable();
            $table->text('desc_pp')->nullable();
            $table->integer('id_ods',)->nullable();
            $table->text('desc_ods')->nullable();
            $table->integer('id_metaods',)->nullable();
            $table->text('desc_metaods')->nullable();
            $table->integer('id_sm1',)->nullable();
            $table->text('desc_sm1')->nullable();
            $table->integer('id_sm2',)->nullable();
            $table->text('desc_sm2')->nullable();
            $table->integer('id_sm3',)->nullable();
            $table->text('desc_sm3')->nullable();
            $table->integer('id_sm4',)->nullable();
            $table->text('desc_sm4')->nullable();
            $table->integer('id_sm5',)->nullable();
            $table->text('desc_sm5')->nullable();
            $table->integer('id_sm6',)->nullable();
            $table->text('desc_sm6')->nullable();
            $table->integer('id_tcontribucion',)->nullable();
            $table->text('desc_tcontribucion')->nullable();
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
        Schema::dropIfExists('ods');
    }
}
