<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ramo_id')->constrained();
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
        Schema::dropIfExists('actividads');
    }

    private function import() {
        return "insert into actividads (id, ramo_id, clave, name, created_at, updated_at)
values  (1, 8, 1, 'Función pública y buen gobierno', null, null),
        (2, 8, 2, 'Servicios de apoyo administrativo', null, null),
        (3, 8, 3, 'Formación recursos humanos para el sector (educación media superior)', null, null),
        (4, 8, 4, 'Formación recursos humanos para el sector (educación superior)', null, null),
        (5, 8, 5, 'Educación agropecuaria de posgrado', null, null),
        (6, 8, 6, 'Elevar el ingreso de los productores y el empleo rural', null, null),
        (7, 8, 7, 'Tecnificación e innovación de las actividades del sector', null, null),
        (8, 8, 8, 'Acuacultura y Pesca', null, null),
        (9, 8, 9, 'Impulso a la reconversión productiva en materia agrícola, pecuaria y pesquera', null, null),
        (10, 8, 10, 'Apoyo al ingreso, a la salud y a la educación de las familias en pobreza', null, null),
        (11, 8, 11, 'Atención de la población urbana y rural en pobreza', null, null),
        (12, 8, 12, 'Oferta de productos básicos a precios competitivos', null, null),
        (13, 8, 226, 'Producción y comercialización de biológicos veterinarios', null, null),
        (14, 15, 1, 'Función pública y buen gobierno', null, null),
        (15, 15, 2, 'Servicios de apoyo administrativo', null, null),
        (16, 15, 3, 'Procuración de justicia agraria', null, null),
        (17, 15, 4, 'Ordenamiento y regularización de la propiedad rural', null, null),
        (18, 15, 5, 'Inscripción de actos jurídicos sobre derechos agrarios', null, null),
        (19, 15, 6, 'Impulso a la inversión para mejoramiento de los niveles de los sujetos agrarios', null, null),
        (20, 15, 7, 'Apoyo en zonas urbanas marginadas', null, null),
        (21, 15, 8, 'Planeación de proyectos urbanos para estados y municipios', null, null),
        (22, 15, 9, 'Apoyo a la vivienda social', null, null),
        (23, 15, 10, 'Ordenación y regularización de la propiedad rural y urbana', null, null),
        (24, 15, 11, 'Conducción de la política nacional de vivienda', null, null),
        (25, 16, 1, 'Función pública y buen gobierno', null, null),
        (26, 16, 2, 'Servicios de apoyo administrativo', null, null),
        (27, 16, 3, 'Manejo eficiente y sustentable del agua y prevención de inundaciones', null, null),
        (28, 16, 4, 'Producción y Protección Forestal', null, null),
        (29, 16, 5, 'Desarrollo e investigación científica y tecnológica del agua y medio ambiente', null, null),
        (30, 16, 6, 'Fomento y regulación de las actividades económicas y sociales para la protección del medio ambiente y recursos naturales', null, null),
        (31, 16, 7, 'Conservación y Manejo Sustentable de los Ecosistemas y su Biodiversidad', null, null),
        (32, 16, 8, 'Impulso a la participación social, acceso a la información y divulgación del conocimiento ambiental', null, null),
        (33, 16, 9, 'Formulación y Conducción de la Política de Medio Ambiente y Recursos Naturales', null, null),
        (34, 16, 10, 'Inspección y vigilancia del cumplimiento de la normatividad ambiental', null, null),
        (35, 18, 1, 'Función pública y buen gobierno', null, null),
        (36, 18, 2, 'Servicios de apoyo administrativo', null, null),
        (37, 18, 3, 'Distribución y comercialización de energía eléctrica', null, null),
        (38, 18, 4, 'Regulación eficiente del sector energético', null, null),
        (39, 18, 5, 'Ahorro de energía y fomento de fuentes renovables', null, null),
        (40, 18, 6, 'Investigación y desarrollo tecnológico y de capital humano en energía eléctrica', null, null),
        (41, 18, 7, 'Investigación y desarrollo tecnológico en materia petrolera', null, null),
        (42, 18, 9, 'Gestión de la eficiencia energética', null, null),
        (43, 18, 12, 'Pensiones y jubilaciones para el personal de CFE', null, null),
        (44, 18, 13, 'Generación de energía eléctrica', null, null),
        (45, 18, 14, 'Transmisión, transformación y control de la energía eléctrica', null, null),
        (46, 18, 15, 'Infraestructura básica en energía eléctrica', null, null),
        (47, 18, 16, 'Investigación y desarrollo tecnológico y de capital humano en energía nuclear', null, null),
        (48, 18, 17, 'Seguimiento y evaluación a los programas, políticas e información en eficiencia energética', null, null),
        (49, 18, 18, 'Supervisar la normatividad en eficiencia energética', null, null),
        (50, 18, 19, 'Promoción, vinculación e innovación en la eficiencia energética', null, null),
        (51, 18, 20, 'Pensiones y jubilaciones para el personal de CENACE', null, null),
        (52, 18, 101, 'Construcción, arrendamiento y comercialización de inmuebles, así como otorgamiento de soluciones técnicas en materia inmobiliaria para Pemex, sus Subsidiarias, Filiales y otras Entidades del Gobierno Federal', null, null),
        (53, 18, 226, 'Producción de petróleo crudo, gas, petrolíferos y petroquímicos y mantenimiento de instalaciones', null, null),
        (54, 18, 227, 'Distribución de petróleo crudo, gas, petrolíferos y petroquímicos y mantenimiento de instalaciones', null, null),
        (55, 18, 228, 'Comercialización de petróleo crudo, gas, petrolíferos y petroquímicos y mantenimiento de instalaciones', null, null),
        (56, 18, 229, 'Exploraciones para descubrir yacimientos de hidrocarburos', null, null),
        (57, 18, 230, 'Entorno ecológico', null, null),
        (58, 18, 231, 'Personal activo y jubilado saludable y con calidad de vida', null, null),
        (59, 18, 232, 'Pensiones y jubilaciones', null, null),
        (60, 18, 233, 'Servicios de telecomunicaciones en PEMEX', null, null),
        (61, 18, 234, 'Gestión corporativa a los organismos subsidiarios de PEMEX', null, null),
        (62, 18, 526, 'Excedentes de petróleo crudo para el comercio exterior y prestación de servicios comerciales y administrativos de calidad', null, null),
        (63, 18, 527, 'Pago de pensiones y jubilaciones al personal de P.M.I.', null, null),
        (64, 18, 576, 'Servicios relacionados con la exploración sísmica para coadyuvar en la localización de áreas de oportunidad relacionadas con los hidrocarburos para incrementar las reservas', null, null),
        (65, 18, 577, 'Servicios y asistencia técnica especializada relacionada con los procesos de producción de hidrocarburos', null, null),
        (66, 53, 1, 'Función Pública y buen Gobierno', null, null),
        (67, 53, 12, 'Pensiones y jubilaciones para el personal', null, null),
        (68, 53, 13, 'Generación de Energía Eléctrica', null, null),
        (69, 53, 14, 'Transmisión de Energía Eléctrica', null, null),
        (70, 53, 16, 'Distribución de Energía Eléctrica', null, null),
        (71, 53, 17, 'Comercialización de Energía Eléctrica', null, null),
        (72, 53, 18, 'Gestión del Corporativo a las Empresas Subsidiarias', null, null);";
    }
}
