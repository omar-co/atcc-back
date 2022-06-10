<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEjeNdcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eje_ndcs', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
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
        Schema::dropIfExists('eje_ndcs');
    }

    private function import() {
        return "insert into eje_ndcs (id, clave, nombre, created_at, updated_at)
values  (1, 'Eje A', 'Impactos negativos en la población', null, null),
        (2, 'Eje B', 'Seguridad alimentaria', null, null),
        (3, 'Eje C', 'Biodiversidad', null, null),
        (4, 'Eje D', 'Recursos hídricos', null, null),
        (5, 'Eje E', 'Infraestructura estratégica', null, null);";
    }
}
