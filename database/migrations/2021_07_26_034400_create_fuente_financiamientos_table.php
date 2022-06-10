<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateFuenteFinanciamientosTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('fuente_financiamientos', function (Blueprint $table) {
            $table->id();
            $table->integer('clave');
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
    public function down() {
        Schema::dropIfExists('fuente_financiamientos');
    }

    private function import() {
        return "insert into hacienda.fuente_financiamientos (id, clave, nombre, created_at, updated_at)
values  (1, 1, 'Recursos fiscales', null, null),
        (2, 2, 'Gasto financiado con recursos del BID-BIRF, así como otros financiamientos externos', null, null),
        (3, 3, 'Contraparte nacional', null, null),
        (4, 4, 'Ingresos Propios', null, null),
        (5, 5, 'Recursos fiscales derivados de ingresos excedentes', null, null);";
    }
}
