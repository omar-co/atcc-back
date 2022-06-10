<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidads', function (Blueprint $table) {
            $table->id();
            $table->char('letter');
            $table->string('description');
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
        Schema::dropIfExists('modalidads');
    }

    private function import() {
        return "insert into modalidads (id, letter, description, created_at, updated_at)
values  (1, 'A', 'Funciones de las Fuerzas Armadas', null, null),
        (2, 'B', 'Provisión de Bienes Públicos', null, null),
        (3, 'C', 'Participaciones a entidades federativas y municipios', null, null),
        (4, 'D', 'Costo financiero, deuda o apoyos a deudores y ahorradores de la banca', null, null),
        (5, 'E', 'Prestación de Servicios Públicos', null, null),
        (6, 'F', 'Promoción y fomento', null, null),
        (7, 'G', 'Regulación y supervisión', null, null),
        (8, 'H', 'Adeudos de Ejercicios Fiscales Anteriores (ADEFAS)', null, null),
        (9, 'I', 'Gasto Federalizado', null, null),
        (10, 'J', 'Pensiones y jubilaciones', null, null),
        (11, 'K', 'Proyectos de Inversión', null, null),
        (12, 'L', 'Obligaciones de cumplimiento de resolución jurisdiccional', null, null),
        (13, 'M', 'Apoyo al proceso presupuestario y para mejorar la eficiencia institucional', null, null),
        (14, 'N', 'Desastres Naturales', null, null),
        (15, 'O', 'Apoyo a la función pública y al mejoramiento de la gestión', null, null),
        (16, 'P', 'Planeación, seguimiento y evaluación de políticas públicas', null, null),
        (17, 'R', 'Específicos', null, null),
        (18, 'S', 'Sujetos a Reglas de Operación', null, null),
        (19, 'T', 'Aportaciones a la seguridad social', null, null),
        (20, 'U', 'Otros Subsidios', null, null),
        (21, 'W', 'Operaciones ajenas', null, null),
        (22, 'Y', 'Aportaciones a fondos de estabilización', null, null),
        (23, 'Z', 'Aportaciones a fondos de inversión y reestructura de pensiones', null, null);";
    }
}
