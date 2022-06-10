<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp_ids', function (Blueprint $table) {
            $table->id();
            $table->string('pp_id')->unique();
            $table->foreignId('ramo_id')->constrained();
            $table->foreignId('modalidad_id')->constrained();
            $table->foreignId('programa_presupuestal_id')->constrained();
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
        Schema::dropIfExists('pp_ids');
    }
}
