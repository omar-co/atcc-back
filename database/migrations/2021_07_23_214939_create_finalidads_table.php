<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFinalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finalidads', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });

        DB::statement($this->import());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finalidads');
    }

    private function import(): string {
        return "insert into finalidads (id, nombre, created_at, updated_at)
values  (1, 'Gobierno', null, null),
        (2, 'Desarrollo Social', null, null),
        (3, 'Desarrollo Económico', null, null),
        (4, 'Otras no Clasificadas en Funciones Anteriores', null, null);";
    }
}
