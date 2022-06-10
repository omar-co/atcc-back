<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('finalidad_id')->constrained();
            $table->integer('clave');
            $table->string('nombre');
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::statement($this->import());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcions');
    }

    private function import() {
        return "insert into funcions (id, finalidad_id, clave, nombre, created_at, updated_at)
values  (1, 1, 1, 'Legislación', null, null),
        (2, 1, 2, 'Justicia', null, null),
        (3, 1, 3, 'Coordinación de la Política de Gobierno', null, null),
        (4, 1, 4, 'Relaciones Exteriores', null, null),
        (5, 1, 5, 'Asuntos Financieros y Hacendarios', null, null),
        (6, 1, 6, 'Seguridad Nacional', null, null),
        (7, 1, 7, 'Asuntos de Orden Público y de Seguridad Interior', null, null),
        (8, 1, 8, 'Otros Servicios Generales', null, null),
        (9, 2, 1, 'Protección Ambiental', null, null),
        (10, 2, 2, 'Vivienda y Servicios a la Comunidad', null, null),
        (11, 2, 3, 'Salud', null, null),
        (12, 2, 4, 'Recreación, Cultura y Otras Manifestaciones Sociales', null, null),
        (13, 2, 5, 'Educación', null, null),
        (14, 2, 6, 'Protección Social', null, null),
        (15, 2, 7, 'Otros Asuntos Sociales', null, null),
        (16, 3, 1, 'Asuntos Económicos, Comerciales y Laborales en General', null, null),
        (17, 3, 2, 'Agropecuaria, Silvicultura, Pesca y Caza', null, null),
        (18, 3, 3, 'Combustibles y Energía', null, null),
        (19, 3, 4, 'Minería, Manufacturas y Construcción', null, null),
        (20, 3, 5, 'Transporte', null, null),
        (21, 3, 6, 'Comunicaciones', null, null),
        (22, 3, 7, 'Turismo', null, null),
        (23, 3, 8, 'Ciencia, Tecnología e Innovación', null, null),
        (24, 3, 9, 'Otras Industrias y Otros Asuntos Económicos', null, null),
        (25, 4, 1, 'Transacciones de la Deuda Pública / Costo Financiero de la Deuda', null, null),
        (26, 4, 2, 'Transferencias, Participaciones y Aportaciones entre diferentes Niveles y Ordenes de Gobierno', null, null),
        (27, 4, 3, 'Saneamiento del Sistema Financiero', null, null),
        (28, 4, 4, 'Adeudos de Ejercicios Fiscales Anteriores', null, null);";
    }
}
