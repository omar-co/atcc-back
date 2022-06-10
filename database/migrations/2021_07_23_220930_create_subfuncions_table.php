<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSubfuncionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subfuncions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('funcion_id')->constrained();
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
        Schema::dropIfExists('subfuncions');
    }

    private function import() {
        return "insert into subfuncions (id, funcion_id, clave, nombre, created_at, updated_at)
values  (1, 1, 1, 'Legislación', null, null),
        (2, 1, 2, 'Fiscalización', null, null),
        (3, 2, 1, 'Impartición de Justicia', null, null),
        (4, 2, 2, 'Procuración de Justicia', null, null),
        (5, 2, 3, 'Reclusión y Readaptación Social', null, null),
        (6, 2, 4, 'Derechos Humanos', null, null),
        (7, 3, 1, 'Presidencia / Gubernatura', null, null),
        (8, 3, 2, 'Política Interior', null, null),
        (9, 3, 3, 'Preservación y Cuidado del Patrimonio Público', null, null),
        (10, 3, 4, 'Función Pública', null, null),
        (11, 3, 5, 'Asuntos Jurídicos', null, null),
        (12, 3, 6, 'Organización de Procesos Electorales', null, null),
        (13, 3, 7, 'Población', null, null),
        (14, 3, 8, 'Territorio', null, null),
        (15, 3, 9, 'Otros', null, null),
        (16, 4, 1, 'Relaciones Exteriores', null, null),
        (17, 5, 1, 'Asuntos Financieros', null, null),
        (18, 5, 2, 'Asuntos Hacendarios', null, null),
        (19, 6, 1, 'Defensa', null, null),
        (20, 6, 2, 'Marina', null, null),
        (21, 6, 3, 'Inteligencia para la Preservación de la Seguridad Nacional', null, null),
        (22, 7, 1, 'Policía', null, null),
        (23, 7, 2, 'Protección Civil', null, null),
        (24, 7, 3, 'Otros Asuntos de Orden Público y Seguridad', null, null),
        (25, 7, 4, 'Sistema Nacional de Seguridad Pública', null, null),
        (26, 8, 1, 'Servicios Registrales, Administrativos y Patrimoniales', null, null),
        (27, 8, 2, 'Servicios Estadísticos', null, null),
        (28, 8, 3, 'Servicios de Comunicación y Medios', null, null),
        (29, 8, 4, 'Acceso a la Información Pública Gubernamental', null, null),
        (30, 8, 5, 'Otros', null, null),
        (31, 9, 1, 'Ordenación de Desechos', null, null),
        (32, 9, 2, 'Administración del Agua', null, null),
        (33, 9, 3, 'Ordenación de Aguas Residuales, Drenaje y Alcantarillado', null, null),
        (34, 9, 4, 'Reducción de la Contaminación', null, null),
        (35, 9, 5, 'Protección de la Diversidad Biológica y del Paisaje', null, null),
        (36, 9, 6, 'Otros de Protección Ambiental', null, null),
        (37, 10, 1, 'Urbanización', null, null),
        (38, 10, 2, 'Desarrollo Comunitario', null, null),
        (39, 10, 3, 'Abastecimiento de Agua', null, null),
        (40, 10, 4, 'Alumbrado Público', null, null),
        (41, 10, 5, 'Vivienda', null, null),
        (42, 10, 6, 'Servicios Comunales', null, null),
        (43, 10, 7, 'Desarrollo Regional', null, null),
        (44, 11, 1, 'Prestación de Servicios de Salud a la Comunidad', null, null),
        (45, 11, 2, 'Prestación de Servicios de Salud a la Persona', null, null),
        (46, 11, 3, 'Generación de Recursos para la Salud', null, null),
        (47, 11, 4, 'Rectoría del Sistema de Salud', null, null),
        (48, 11, 5, 'Protección Social en Salud', null, null),
        (49, 12, 1, 'Deporte y Recreación', null, null),
        (50, 12, 2, 'Cultura', null, null),
        (51, 12, 3, 'Radio, Televisión y Editoriales', null, null),
        (52, 12, 4, 'Asuntos Religiosos y Otras Manifestaciones Sociales', null, null),
        (53, 13, 1, 'Educación Básica', null, null),
        (54, 13, 2, 'Educación Media Superior', null, null),
        (55, 13, 3, 'Educación Superior', null, null),
        (56, 13, 4, 'Posgrado', null, null),
        (57, 13, 5, 'Educación para Adultos', null, null),
        (58, 13, 6, 'Otros Servicios Educativos y Actividades Inherentes', null, null),
        (59, 14, 1, 'Enfermedad e incapacidad', null, null),
        (60, 14, 2, 'Edad Avanzada', null, null),
        (61, 14, 3, 'Familia e Hijos', null, null),
        (62, 14, 4, 'Desempleo', null, null),
        (63, 14, 5, 'Alimentación y Nutrición', null, null),
        (64, 14, 6, 'Apoyo Social para la Vivienda', null, null),
        (65, 14, 7, 'Indígenas', null, null),
        (66, 14, 8, 'Otros Grupos Vulnerables', null, null),
        (67, 14, 9, 'Otros de Seguridad Social y Asistencia Social', null, null),
        (68, 15, 1, 'Otros Asuntos Sociales', null, null),
        (69, 16, 1, 'Asuntos Económicos y Comerciales en General', null, null),
        (70, 16, 2, 'Asuntos Laborales Generales', null, null),
        (71, 17, 1, 'Agropecuaria', null, null),
        (72, 17, 2, 'Silvicultura', null, null),
        (73, 17, 3, 'Acuacultura, Pesca y Caza', null, null),
        (74, 17, 4, 'Agroindustrial', null, null),
        (75, 17, 5, 'Hidroagrícola', null, null),
        (76, 17, 6, 'Apoyo Financiero a la Banca y Seguro Agropecuario', null, null),
        (77, 18, 1, 'Carbón y Otros Combustibles Minerales Sólidos', null, null),
        (78, 18, 2, 'Petróleo y Gas Natural (Hidrocarburos)', null, null),
        (79, 18, 3, 'Combustibles Nucleares', null, null),
        (80, 18, 4, 'Otros Combustibles', null, null),
        (81, 18, 5, 'Electricidad', null, null),
        (82, 18, 6, 'Energía no Eléctrica', null, null),
        (83, 19, 1, 'Extracción de Recursos Minerales excepto los Combustibles Minerales', null, null),
        (84, 19, 2, 'Manufacturas', null, null),
        (85, 19, 3, 'Construcción', null, null),
        (86, 20, 1, 'Transporte por Carretera', null, null),
        (87, 20, 2, 'Transporte por Agua y Puertos', null, null),
        (88, 20, 3, 'Transporte por Ferrocarril', null, null),
        (89, 20, 4, 'Transporte Aéreo', null, null),
        (90, 20, 5, 'Transporte por Oleoductos y Gasoductos y Otros Sistemas de Transporte', null, null),
        (91, 20, 6, 'Otros Relacionados con Transporte', null, null),
        (92, 21, 1, 'Comunicaciones', null, null),
        (93, 22, 1, 'Turismo', null, null),
        (94, 22, 2, 'Hoteles y Restaurantes', null, null),
        (95, 23, 1, 'Investigación Científica', null, null),
        (96, 23, 2, 'Desarrollo Tecnológico', null, null),
        (97, 23, 3, 'Servicios Científicos y Tecnológicos', null, null),
        (98, 23, 4, 'Innovación', null, null),
        (99, 24, 1, 'Comercio, Distribución, Almacenamiento y Depósito', null, null),
        (100, 24, 2, 'Otras Industrias', null, null),
        (101, 24, 3, 'Otros Asuntos Económicos', null, null),
        (102, 25, 1, 'Deuda Pública Interna', null, null),
        (103, 25, 2, 'Deuda Pública Externa', null, null),
        (104, 26, 1, 'Transferencias entre Diferentes Niveles y Ordenes de Gobierno', null, null),
        (105, 26, 2, 'Participaciones entre Diferentes Niveles y Ordenes de Gobierno', null, null),
        (106, 26, 3, 'Aportaciones entre Diferentes Niveles y Ordenes de Gobierno', null, null),
        (107, 27, 1, 'Saneamiento del Sistema Financiero', null, null),
        (108, 27, 2, 'Apoyos IPAB', null, null),
        (109, 27, 3, 'Banca de Desarrollo', null, null),
        (110, 27, 4, 'Apoyo a los programas de reestructura en unidades de inversión (UDIS)', null, null),
        (111, 28, 1, 'Adeudos de Ejercicios Fiscales Anteriores', null, null);";
    }
}
