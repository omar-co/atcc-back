<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ramos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('ramos');
    }

    private function import() {
        return "insert into ramos (id, name)
values  (1, 'Poder Legislativo'),
        (2, 'Oficina de la Presidencia de la República'),
        (3, 'Poder Judicial'),
        (4, 'Gobernación'),
        (5, 'Relaciones Exteriores'),
        (6, 'Hacienda y Crédito Público'),
        (7, 'Defensa Nacional'),
        (8, 'Agricultura y Desarrollo Rural'),
        (9, 'Comunicaciones y Transportes'),
        (10, 'Economía'),
        (11, 'Educación Pública'),
        (12, 'Salud'),
        (13, 'Marina'),
        (14, 'Trabajo y Previsión Social'),
        (15, 'Desarrollo Agrario, Territorial y Urbano'),
        (16, 'Medio Ambiente y Recursos Naturales'),
        (18, 'Energía'),
        (19, 'Aportaciones a Seguridad Social'),
        (20, 'Bienestar'),
        (21, 'Turismo'),
        (22, 'Instituto Nacional Electoral'),
        (23, 'Provisiones Salariales y Económicas'),
        (24, 'Deuda Pública'),
        (25, 'Previsiones y Aportaciones para los Sistemas de Educación Básica, Normal, Tecnológica y de Adultos'),
        (27, 'Función Pública'),
        (28, 'Participaciones a Entidades Federativas y Municipios'),
        (29, 'Erogaciones para las Operaciones y Programas de Saneamiento Financiero'),
        (30, 'Adeudos de Ejercicios Fiscales Anteriores'),
        (31, 'Tribunales Agrarios'),
        (32, 'Tribunal Federal de Justicia Administrativa'),
        (33, 'Aportaciones Federales para Entidades Federativas y Municipios'),
        (34, 'Erogaciones para los Programas de Apoyo a Ahorradores y Deudores de la Banca'),
        (35, 'Comisión Nacional de los Derechos Humanos'),
        (36, 'Seguridad y Protección Ciudadana'),
        (37, 'Consejería Jurídica del Ejecutivo Federal'),
        (38, 'Consejo Nacional de Ciencia y Tecnología'),
        (40, 'Información Nacional Estadística y Geográfica'),
        (41, 'Comisión Federal de Competencia Económica'),
        (43, 'Instituto Federal de Telecomunicaciones'),
        (44, 'Instituto Nacional de Transparencia, Acceso a la Información y Protección de Datos Personales'),
        (45, 'Comisión Reguladora de Energía'),
        (46, 'Comisión Nacional de Hidrocarburos'),
        (47, 'Entidades no Sectorizadas'),
        (48, 'Cultura'),
        (49, 'Fiscalía General de la República'),
        (50, 'Instituto Mexicano del Seguro Social'),
        (51, 'Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado'),
        (52, 'Petróleos Mexicanos'),
        (53, 'Comisión Federal de Electricidad');";
    }
}
