<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('key');
            $table->mediumText('value');
            $table->string('type');
            $table->string('label');
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('configs');
    }

    public function import() {
        return "insert into configs (path, `key`, value, type, label, user_id, created_at, updated_at)
values  ('app\\\sections\\\active', 'ods', 'false', 'bool', 'ODS Activo', 50, '2021-11-12 19:23:21', '2021-11-12 19:23:18'),
        ('app\\\calendar', 'ejercicio', '2022', 'number', 'Ejercicio', 50, '2021-11-12 19:23:21', '2022-07-11 17:14:09'),
        ('app\\\calendar', 'corte', '2021-11-25', 'date', 'Fecha de Corte', 50, '2021-11-12 19:23:21', '2021-11-13 06:33:53'),
        ('app\\\modules', 'modules', '[{\"value\":\"pecc\",\"label\":\"PNCC - PECC\"},{\"value\":\"pregunta\",\"label\":\"Vinculaci\\u00f3n PP-PNCC\"},{\"value\":\"indicadores\",\"label\":\"PNCC - Indicadores\"},{\"value\":\"otros\",\"label\":\"Vinculaci\\u00f3n con otros elementos relevantes\"},{\"value\":\"componente\",\"label\":\"Tipo de Contribuci\\u00f3n\"},{\"value\":\"cuantificacion\",\"label\":\"Cuantificaci\\u00f3n\"}]', 'json', 'Modulos Activos', 50, '2021-11-12 19:23:21', '2021-11-13 06:33:53');";
    }
}
