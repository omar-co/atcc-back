<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTipoGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_gastos', function (Blueprint $table) {
            $table->id();
            $table->integer('valor');
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
        Schema::dropIfExists('tipo_gastos');
    }

    private function import() {
        return "insert into tipo_gastos (id, valor, nombre, created_at, updated_at)
values  (1, 0, 'Gasto corriente por concepto de recursos otorgados a fideicomisos públicos no considerados entidad paraestatal cuyo propósito financiero se limite a la administración y pago', null, null),
        (2, 1, 'Gasto corriente', null, null),
        (3, 2, 'Gasto de capital diferente de obra pública', null, null),
        (4, 3, 'Gasto de obra pública', null, null),
        (5, 4, 'Pensiones y jubilaciones', null, null),
        (6, 5, 'Participaciones', null, null),
        (7, 7, 'Gasto corriente por concepto de gastos indirectos de programas de subsidios', null, null),
        (8, 8, 'Gasto de inversión por concepto de gastos indirectos de programas de subsidios', null, null),
        (9, 9, 'Gasto de inversión por concepto de recursos otorgados a fideicomisos públicos no considerados entidad paraestatal cuyo propósito financiero se limite a la administración y pago', null, null);";
    }
}
