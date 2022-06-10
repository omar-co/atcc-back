<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEntidadFederativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidad_federativas', function (Blueprint $table) {
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
    public function down()
    {
        Schema::dropIfExists('entidad_federativas');
    }

    private function import() {
        return "insert into hacienda.entidad_federativas (id, clave, nombre, created_at, updated_at)
values  (1, 1, 'Aguascalientes', null, null),
        (2, 2, 'Baja California', null, null),
        (3, 3, 'Baja California Sur', null, null),
        (4, 4, 'Campeche', null, null),
        (5, 5, 'Coahuila', null, null),
        (6, 6, 'Colima', null, null),
        (7, 7, 'Chiapas', null, null),
        (8, 8, 'Chihuahua', null, null),
        (9, 9, 'Ciudad de México', null, null),
        (10, 10, 'Durango', null, null),
        (11, 11, 'Guanajuato', null, null),
        (12, 12, 'Guerrero', null, null),
        (13, 13, 'Hidalgo', null, null),
        (14, 14, 'Jalisco', null, null),
        (15, 15, 'Estado de México', null, null),
        (16, 16, 'Michoacán', null, null),
        (17, 17, 'Morelos', null, null),
        (18, 18, 'Nayarit', null, null),
        (19, 19, 'Nuevo León', null, null),
        (20, 20, 'Oaxaca', null, null),
        (21, 21, 'Puebla', null, null),
        (22, 22, 'Querétaro', null, null),
        (23, 23, 'Quintana Roo', null, null),
        (24, 24, 'San Luis Potosí', null, null),
        (25, 25, 'Sinaloa', null, null),
        (26, 26, 'Sonora', null, null),
        (27, 27, 'Tabasco', null, null),
        (28, 28, 'Tamaulipas', null, null),
        (29, 29, 'Tlaxcala', null, null),
        (30, 30, 'Veracruz', null, null),
        (31, 31, 'Yucatán', null, null),
        (32, 32, 'Zacatecas', null, null),
        (33, 33, 'En El Extranjero', null, null),
        (34, 34, 'No Distribuible Geográficamente', null, null);";
    }
}
