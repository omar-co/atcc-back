<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMetaOdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_ods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eje_ndc_id')->nullable()->constrained();
            $table->string('clave');
            $table->text('nombre');
            $table->string('componenete');
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
        Schema::dropIfExists('meta_ods');
    }

    private function import() {
        return "insert into meta_ods (id, eje_ndc_id, clave, nombre, componenete, created_at, updated_at)
values  (1, 1, 'A1.', 'Implementar acciones en 50% de los municipios identificados como vulnerables de acuerdo con el Atlas Nacional de Vulnerabilidad al Cambio Climático y el Programa Especial de Cambio Climático 2020—2024 priorizando a los de mayor rezago social.', 'mitigacion', null, null),
        (2, 1, 'A2.', 'Implementar estrategias integrales de adaptación que fortalezcan la resiliencia en asentamientos humanos.', 'mitigacion', null, null),
        (3, 1, 'A3.', 'Fortalecer en los tres órdenes de gobierno los sistemas de alerta temprana y protocolos de prevención y acción ante peligros hidrometeorológicos y climáticos en diferentes sistemas naturales y humanos.', 'mitigacion', null, null),
        (4, 1, 'A4.', 'Incorporar criterios de adaptación al cambio climático en los instrumentos de planeación, gestión territorial y del riesgo de desastres en todos los sectores y órdenes de gobierno.', 'mitigacion', null, null),
        (5, 1, 'A5.', 'Fortalecer instrumentos financieros, para la gestión del riesgo de desastres y atención mediante la integración de criterios de adaptación al cambio climático.', 'mitigacion', null, null),
        (6, 1, 'A6.', 'Implementar estrategias para reducir los impactos en la salud, relacionados con enfermedades exacerbadas por el cambio climático.', 'mitigacion', null, null),
        (7, 1, 'A7.', 'Identificar y atender el desplazamiento forzado de personas por los impactos negativos del cambio climático', 'mitigacion', null, null),
        (8, 2, 'B1.', 'Promover prácticas de producción y consumo sostenibles, la conservación de los recursos genéticos y la recuperación de paisajes bioculturales.', 'mitigacion', null, null),
        (9, 2, 'B2.', 'Incorporar el riesgo por cambio climático dentro de las cadenas de valor y planes de inversión de los sectores productivos.', 'mitigacion', null, null),
        (10, 2, 'B3.', 'Contribuir a la prevención y atención de plagas y enfermedades de especies animales domesticadas y cultivos vegetales, facilitadas y exacerbadas por el cambio climático.', 'mitigacion', null, null),
        (11, 2, 'B4', 'Fortalecer instrumentos de política ambiental e implementar acciones para asegurar la protección ante impactos potenciales del cambio climático de los cultivos nativos, relevantes para la agricultura y la seguridad alimentaria.', 'mitigacion', null, null),
        (12, 2, 'B5.', 'Impulsar mecanismos de financiamiento que permitan enfrentar los impactos negativos del cambio climático en el sector primario.', 'mitigacion', null, null),
        (13, 3, 'C1.', 'Alcanzar al 2030 una tasa cero de deforestación neta.', 'mitigacion', null, null),
        (14, 3, 'C2.', 'Fortalecer instrumentos de política ambiental e implementar acciones para conservar y restaurar los ecosistemas continentales, incrementar su conectividad ecológica y favorecer su resiliencia.', 'mitigacion', null, null),
        (15, 3, 'C3.', 'Fortalecer instrumentos e implementar acciones para la conservación de la biodiversidad y restauración en ecosistemas marinos, costeros y dulceacuícolas, así ́ como promover el incremento y permanencia de reservorios de carbono, haciendo énfasis en el carbono azul.', 'mitigacion', null, null),
        (16, 3, 'C4.', 'Impulsar acciones para prevenir el establecimiento, controlar y erradicar las especies invasoras, enfermedades y plagas, cuyos impactos se exacerban por efectos del cambio climático.', 'mitigacion', null, null),
        (17, 3, 'C5.', 'Diseñar e implementar acciones que contribuyan al combate de la desertificación y a la conservación de suelos.', 'mitigacion', null, null),
        (18, 3, 'C6.', 'Fortalecer instrumentos de política ambiental e implementar acciones para conservar y restaurar las islas e incrementar su resiliencia.', 'mitigacion', null, null),
        (19, 3, 'C7.', 'Implementar acciones de conservación y restauración de los mares y océanos para favorecer su resiliencia ante el cambio climático.', 'mitigacion', null, null),
        (20, 4, 'D1.', 'Implementar acciones para el uso sostenible de los recursos hídricos en sus diferentes usos consuntivos con enfoque de cambio climático.', 'mitigacion', null, null),
        (21, 4, 'D2.', 'Promover los servicios ambientales hidrológicos, mediante la conservación, protección y restauración en las cuencas con especial atención en Soluciones basadas en la Naturaleza.', 'mitigacion', null, null),
        (22, 4, 'D3.', 'Aumentar el tratamiento de aguas residuales industriales y urbanas, asegurando la cantidad y buena calidad del agua en asentamientos humanos mayores a 500,000 habitantes.', 'mitigacion', null, null),
        (23, 4, 'D4.', 'Garantizar el acceso al agua –en cantidad y calidad– para uso y consumo humano, ante condiciones de cambio climático.', 'mitigacion', null, null),
        (24, 5, 'E1.', 'Incrementar la seguridad estructural y funcional de la infraestructura estratégica actual y por desarrollar ante eventos asociados al cambio climático.', 'mitigacion', null, null),
        (25, 5, 'E2.', 'Incorporar criterios de adaptación al cambio climático y gestión integral del riesgo de desastres en proyectos de inversión de infraestructura estratégica.', 'mitigacion', null, null),
        (26, 5, 'E3.', 'Proteger, restaurar y conservar el patrimonio cultural tangible ante impactos del cambio climático.', 'mitigacion', null, null),
        (27, 5, 'E4.', 'Generar y fortalecer los instrumentos de financiamiento público, así como promover la inversión privada, para proyectos de infraestructura y patrimonio cultural que incorporen criterios de adaptación.', 'mitigacion', null, null),
        (28, null, '1', 'Transporte', 'adaptacion', null, null),
        (29, null, '2', 'Generación eléctrica', 'adaptacion', null, null),
        (30, null, '3', 'Residencial y comercial', 'adaptacion', null, null),
        (31, null, '4', 'Petróleo y gas', 'adaptacion', null, null),
        (32, null, '5', 'Industria', 'adaptacion', null, null),
        (33, null, '6', 'Agricultura y ganadería', 'adaptacion', null, null),
        (34, null, '7', 'Residuos', 'adaptacion', null, null),
        (35, null, '8', 'Uso de suelo, cambio de uso de suelo y  silvicultura', 'adaptacion', null, null)

        ;";
    }
}
