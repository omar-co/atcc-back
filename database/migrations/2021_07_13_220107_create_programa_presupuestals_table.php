<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProgramaPresupuestalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_presupuestals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ramo_id')->constrained();
            $table->foreignId('modalidad_id')->constrained();
            $table->integer('clave');
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
        Schema::dropIfExists('programa_presupuestals');
    }

    private function import() {
        return "insert into programa_presupuestals (id, ramo_id, modalidad_id, clave, name, created_at, updated_at)
values  (1, 8, 2, 1, 'Producción y comercialización de Biológicos Veterinarios', null, null),
        (2, 8, 2, 4, 'Adquisición de leche nacional', null, null),
        (3, 8, 2, 5, 'Comercialización de productos lácteos', null, null),
        (4, 8, 5, 1, 'Desarrollo, aplicación de programas educativos e investigación en materia agroalimentaria', null, null),
        (5, 8, 5, 6, 'Generación de Proyectos de Investigación', null, null),
        (6, 8, 7, 1, 'Regulación, supervisión y aplicación de las políticas públicas en materia agropecuaria, acuícola y pesquera', null, null),
        (7, 8, 11, 9, 'Proyectos de infraestructura social de educación', null, null),
        (8, 8, 11, 14, 'Otros proyectos de infraestructura social', null, null),
        (9, 8, 11, 24, 'Otros proyectos de infraestructura gubernamental', null, null),
        (10, 8, 11, 27, 'Mantenimiento de infraestructura', null, null),
        (11, 8, 11, 28, 'Estudios de preinversión', null, null),
        (12, 8, 13, 1, 'Actividades de apoyo administrativo', null, null),
        (13, 8, 15, 1, 'Actividades de apoyo a la función pública y buen gobierno', null, null),
        (14, 8, 16, 1, 'Diseño y Aplicación de la Política Agropecuaria', null, null),
        (15, 8, 18, 52, 'Programa de Abasto Social de Leche a cargo de Liconsa, S.A. de C.V.', null, null),
        (16, 8, 18, 53, 'Programa de Abasto Rural a cargo de Diconsa, S.A. de C.V. (DICONSA)', null, null),
        (17, 8, 18, 263, 'Sanidad e Inocuidad Agroalimentaria', null, null),
        (18, 8, 18, 290, 'Precios de Garantía a Productos Alimentarios Básicos', null, null),
        (19, 8, 18, 292, 'Fertilizantes', null, null),
        (20, 8, 18, 293, 'Producción para el Bienestar', null, null),
        (21, 8, 18, 304, 'Programa de Fomento a la Agricultura, Ganadería, Pesca y Acuicultura', null, null),
        (22, 8, 20, 17, 'Inteligencia de Información Estadística y Geoespacial del Campo', null, null),
        (23, 8, 20, 24, 'Programa Desarrollo en Territorios Rurales', null, null),
        (24, 8, 21, 1, 'Operaciones ajenas', null, null),
        (25, 15, 5, 1, 'Procuración de justicia agraria', null, null),
        (26, 15, 5, 2, 'Programa de Atención de Conflictos Agrarios', null, null),
        (27, 15, 5, 3, 'Ordenamiento y regulación de la propiedad rural', null, null),
        (28, 15, 5, 6, 'Administración de fondos comunes de núcleos agrarios y supervisión de expropiaciones', null, null),
        (29, 15, 5, 14, 'Programa de Otorgamiento de Crédito (Fondo Nacional de Garantías para la Vivienda Popular)', null, null),
        (30, 15, 7, 1, 'Atención de asuntos jurídicos en materia agraria, territorial, urbana y vivienda', null, null),
        (31, 15, 11, 27, 'Mantenimiento de infraestructura', null, null),
        (32, 15, 11, 49, 'Estudios y proyectos para el desarrollo regional, agrario, metropolitano y urbano', null, null),
        (33, 15, 12, 1, 'Obligaciones jurídicas Ineludibles', null, null),
        (34, 15, 13, 1, 'Actividades de apoyo administrativo', null, null),
        (35, 15, 15, 1, 'Actividades de apoyo a la función pública y buen gobierno', null, null),
        (36, 15, 16, 3, 'Modernización del Catastro Rural Nacional', null, null),
        (37, 15, 16, 4, 'Conducción e instrumentación de la política nacional de vivienda', null, null),
        (38, 15, 16, 5, 'Política de Desarrollo Urbano y Ordenamiento del Territorio', null, null),
        (39, 15, 17, 2, 'Programa para la constitución de reservas territoriales prioritarias para el desarrollo urbano ordenado', null, null),
        (40, 15, 17, 3, 'Programa Nacional de Regularización de Lotes', null, null),
        (41, 15, 18, 177, 'Programa de Vivienda Social', null, null),
        (42, 15, 18, 213, 'Programa para Regularizar Asentamientos Humanos', null, null),
        (43, 15, 18, 273, 'Programa de Mejoramiento Urbano (PMU)', null, null),
        (44, 15, 18, 281, 'Programa Nacional de Reconstrucción', null, null),
        (45, 15, 20, 1, 'Regularización y Registro de Actos Jurídicos Agrarios', null, null),
        (46, 15, 20, 3, 'Programa de modernización de los registros públicos de la propiedad y catastros', null, null),
        (47, 15, 21, 1, 'Operaciones ajenas', null, null),
        (48, 16, 5, 1, 'Operación y mantenimiento de infraestructura hídrica', null, null),
        (49, 16, 5, 5, 'Capacitación Ambiental y Desarrollo Sustentable', null, null),
        (50, 16, 5, 6, 'Sistemas Meteorológicos e Hidrológicos', null, null),
        (51, 16, 5, 9, 'Investigación científica y tecnológica', null, null),
        (52, 16, 5, 14, 'Protección Forestal', null, null),
        (53, 16, 5, 15, 'Investigación en Cambio Climático, Sustentabilidad y Crecimiento Verde', null, null),
        (54, 16, 5, 16, 'Conservación y Manejo de Áreas Naturales Protegidas', null, null),
        (55, 16, 7, 3, 'Regulación Ambiental', null, null),
        (56, 16, 7, 5, 'Inspección y Vigilancia del Medio Ambiente y Recursos Naturales', null, null),
        (57, 16, 7, 10, 'Gestión integral y sustentable del agua', null, null),
        (58, 16, 7, 26, 'Programas de Calidad del Aire y Verificación Vehicular', null, null),
        (59, 16, 7, 30, 'Normativa Ambiental e Instrumentos para el Desarrollo Sustentable', null, null),
        (60, 16, 7, 31, 'Regulación, Gestión y Supervisión del Sector Hidrocarburos', null, null),
        (61, 16, 11, 7, 'Infraestructura de agua potable, alcantarillado y saneamiento', null, null),
        (62, 16, 11, 25, 'Proyectos de inmuebles (oficinas administrativas)', null, null),
        (63, 16, 11, 28, 'Estudios de preinversión', null, null),
        (64, 16, 11, 111, 'Rehabilitación y Modernización de Presas y Estructuras de Cabeza', null, null),
        (65, 16, 11, 129, 'Infraestructura para la Protección de Centros de Población y Áreas Productivas', null, null),
        (66, 16, 11, 133, 'Pago y Expropiaciones para Infraestructura Federal', null, null),
        (67, 16, 11, 138, 'Inversión en Infraestructura Social y Protección Ambiental', null, null),
        (68, 16, 11, 140, 'Inversión del Servicio Meteorológico Nacional', null, null),
        (69, 16, 11, 141, 'Infraestructura para la modernización y rehabilitación de riego y temporal tecnificado', null, null),
        (70, 16, 13, 1, 'Actividades de apoyo administrativo', null, null),
        (71, 16, 14, 1, 'Atención de emergencias y desastres naturales', null, null),
        (72, 16, 15, 1, 'Actividades de apoyo a la función pública y buen gobierno', null, null),
        (73, 16, 16, 1, 'Conducción de las políticas hídricas', null, null),
        (74, 16, 16, 2, 'Planeación, Dirección y Evaluación Ambiental', null, null),
        (75, 16, 16, 3, 'Evaluación de la Política Nacional de Cambio Climático', null, null),
        (76, 16, 17, 15, 'Fideicomisos Ambientales', null, null),
        (77, 16, 18, 46, 'Programa de Conservación para el Desarrollo Sostenible', null, null),
        (78, 16, 18, 74, 'Agua Potable, Drenaje y Tratamiento', null, null),
        (79, 16, 18, 217, 'Programa de Apoyo a la Infraestructura Hidroagrícola', null, null),
        (80, 16, 18, 219, 'Apoyos para el Desarrollo Forestal Sustentable', null, null),
        (81, 16, 20, 1, 'Programa de Devolución de Derechos', null, null),
        (82, 16, 20, 7, 'Devolución de Aprovechamientos', null, null),
        (83, 16, 20, 8, 'Saneamiento de Aguas Residuales', null, null),
        (84, 16, 20, 12, 'Prevención y gestión integral de residuos', null, null),
        (85, 16, 20, 15, 'Programa de desarrollo organizacional de los Consejos de Cuenca', null, null),
        (86, 16, 20, 20, 'Conservación y Aprovechamiento Sustentable de la Vida Silvestre', null, null),
        (87, 16, 20, 32, 'Fortalecimiento Ambiental en Entidades Federativas', null, null),
        (88, 16, 20, 40, 'Programa para la Protección y Restauración de Ecosistemas y Especies Prioritarias', null, null),
        (89, 16, 20, 41, 'Acciones estratégicas para enfrentar los efectos adversos del cambio climático', null, null),
        (90, 16, 21, 1, 'Operaciones ajenas', null, null),
        (91, 18, 5, 4, 'Investigación y Desarrollo Tecnológico en Materia Petrolera', null, null),
        (92, 18, 5, 6, 'Investigación en materia petrolera', null, null),
        (93, 18, 5, 7, 'Prestación de servicios en materia petrolera', null, null),
        (94, 18, 5, 10, 'Distribución de petróleo, gas, petrolíferos y petroquímicos', null, null),
        (95, 18, 5, 16, 'Investigación, desarrollo tecnológico y prestación de servicios en materia nuclear y eléctrica', null, null),
        (96, 18, 5, 568, 'Dirección, coordinación y control de la operación del Sistema Eléctrico Nacional', null, null),
        (97, 18, 5, 576, 'Prestación de Servicios en Materia de Exploración Sísmica Marina  y  Terrestre', null, null),
        (98, 18, 5, 577, 'Servicios y asistencia técnica especializada en materia de producción de hidrocarburos', null, null),
        (99, 18, 7, 3, 'Regulación y supervisión de actividades nucleares y radiológicas', null, null),
        (100, 18, 10, 8, 'Pensiones y jubilaciones para el personal del CENACE', null, null),
        (101, 18, 11, 1, 'Proyectos de infraestructura económica de electricidad', null, null),
        (102, 18, 11, 2, 'Proyectos de infraestructura económica de hidrocarburos', null, null),
        (103, 18, 11, 10, 'Proyectos de infraestructura social de ciencia y tecnología', null, null),
        (104, 18, 11, 25, 'Proyectos de inmuebles (oficinas administrativas)', null, null),
        (105, 18, 11, 27, 'Mantenimiento de infraestructura', null, null),
        (106, 18, 11, 28, 'Estudios de preinversión', null, null),
        (107, 18, 11, 29, 'Programas de adquisiciones', null, null),
        (108, 18, 11, 30, 'Otros proyectos de infraestructura', null, null),
        (109, 18, 13, 1, 'Actividades de apoyo administrativo', null, null),
        (110, 18, 15, 1, 'Actividades de apoyo a la función pública y buen gobierno', null, null),
        (111, 18, 16, 1, 'Conducción de la política energética', null, null),
        (112, 18, 16, 2, 'Coordinación de la política energética en electricidad', null, null),
        (113, 18, 16, 3, 'Coordinación de la política energética en hidrocarburos', null, null),
        (114, 18, 16, 8, 'Gestión, promoción, supervisión y evaluación del aprovechamiento sustentable de la energía', null, null),
        (115, 18, 17, 2, 'Recursos destinados a la transición e investigación en materia energética', null, null),
        (116, 18, 21, 1, 'Operaciones ajenas', null, null),
        (117, 53, 5, 561, 'Operación y mantenimiento de las centrales generadoras de energía eléctrica', null, null),
        (118, 53, 5, 562, 'Operación, mantenimiento y recarga de la Nucleoeléctrica Laguna Verde', null, null),
        (119, 53, 5, 578, 'Apoyo al desarrollo sustentable de comunidades afectadas por la instalación de la infraestructura eléctrica', null, null),
        (120, 53, 5, 579, 'Operación y mantenimiento de la Red Nacional de Transmisión', null, null),
        (121, 53, 5, 580, 'Operación y mantenimiento de la infraestructura del proceso de distribución de energía eléctrica', null, null),
        (122, 53, 5, 581, 'Comercialización de energía eléctrica y productos asociados', null, null),
        (123, 53, 5, 582, 'Prestación de servicios corporativos', null, null),
        (124, 53, 5, 583, 'Servicios de infraestructura aplicable a telecomunicaciones', null, null),
        (125, 53, 5, 584, 'Servicio de transporte de gas natural', null, null),
        (126, 53, 5, 585, 'Funciones en relación con Estrategias de Negocios Comerciales, así como potenciales nuevos negocios', null, null),
        (127, 53, 5, 586, 'Servicios de pruebas, soluciones de ingeniería especializada y de gestión de calidad', null, null),
        (128, 53, 6, 571, 'Promoción de medidas para el ahorro y uso eficiente de la energía eléctrica', null, null),
        (129, 53, 10, 1, 'Pago de pensiones  y jubilaciones', null, null),
        (130, 53, 11, 1, 'Proyectos de infraestructura económica de electricidad', null, null),
        (131, 53, 11, 14, 'Otros proyectos de infraestructura social', null, null),
        (132, 53, 11, 24, 'Otros proyectos de infraestructura gubernamental', null, null),
        (133, 53, 11, 25, 'Proyectos de inmuebles (oficinas administrativas)', null, null),
        (134, 53, 11, 27, 'Mantenimiento de infraestructura', null, null),
        (135, 53, 11, 28, 'Estudios de preinversión', null, null),
        (136, 53, 11, 29, 'Programas de adquisiciones', null, null),
        (137, 53, 11, 44, 'Proyectos de infraestructura económica de electricidad (Pidiregas)', null, null),
        (138, 53, 13, 1, 'Actividades de apoyo administrativo', null, null),
        (139, 53, 15, 1, 'Actividades de apoyo a la función pública y buen gobierno', null, null),
        (140, 53, 16, 552, 'Coordinación de las funciones y recursos para la infraestructura eléctrica', null, null),
        (141, 53, 17, 582, 'Seguridad física en las instalaciones de electricidad', null, null),
        (142, 53, 17, 584, 'Administración de los contratos de producción independiente de energía CFE Generación V', null, null),
        (143, 53, 21, 1, 'Operaciones ajenas', null, null);";
    }
}
