<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadResponsablesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('unidad_responsables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ramo_id')->constrained();
            $table->string('clave');
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
    public function down() {
        Schema::dropIfExists('unidad_responsables');
    }

    private function import() {
        return "insert into unidad_responsables (id, ramo_id, clave, name, created_at, updated_at)
values  (1, 8, '100', 'Secretaría', null, null),
        (2, 8, '108', 'Dirección General de Supervisión, Evaluación y Rendición de Cuentas', null, null),
        (3, 8, '109', 'Dirección General de Normalización Agroalimentaria', null, null),
        (4, 8, '110', 'Oficina del Abogado General', null, null),
        (5, 8, '111', 'Coordinación General de Comunicación Social', null, null),
        (6, 8, '112', 'Coordinación General de Enlace Sectorial', null, null),
        (7, 8, '113', 'Coordinación General de Operación Territorial', null, null),
        (8, 8, '117', 'Coordinación General de Asuntos Internacionales', null, null),
        (9, 8, '121', 'Oficina de Representación en Aguascalientes', null, null),
        (10, 8, '122', 'Oficina de Representación en Baja California', null, null),
        (11, 8, '123', 'Oficina de Representación en Baja California Sur', null, null),
        (12, 8, '124', 'Oficina de Representación en Campeche', null, null),
        (13, 8, '125', 'Oficina de Representación en Coahuila', null, null),
        (14, 8, '126', 'Oficina de Representación en Colima', null, null),
        (15, 8, '127', 'Oficina de Representación en Chiapas', null, null),
        (16, 8, '128', 'Oficina de Representación en Chihuahua', null, null),
        (17, 8, '129', 'Oficina de Representación en la Ciudad de México', null, null),
        (18, 8, '130', 'Oficina de Representación en Durango', null, null),
        (19, 8, '131', 'Oficina de Representación en Guanajuato', null, null),
        (20, 8, '132', 'Oficina de Representación en Guerrero', null, null),
        (21, 8, '133', 'Oficina de Representación en Hidalgo', null, null),
        (22, 8, '134', 'Oficina de Representación en Jalisco', null, null),
        (23, 8, '135', 'Oficina de Representación en el Estado de México', null, null),
        (24, 8, '136', 'Oficina de Representación en Michoacán', null, null),
        (25, 8, '137', 'Oficina de Representación en Morelos', null, null),
        (26, 8, '138', 'Oficina de Representación en Nayarit', null, null),
        (27, 8, '139', 'Oficina de Representación en Nuevo León', null, null),
        (28, 8, '140', 'Oficina de Representación en Oaxaca', null, null),
        (29, 8, '141', 'Oficina de Representación en Puebla', null, null),
        (30, 8, '142', 'Oficina de Representación en Querétaro', null, null),
        (31, 8, '143', 'Oficina de Representación en Quintana Roo', null, null),
        (32, 8, '144', 'Oficina de Representación en San Luis Potosí', null, null),
        (33, 8, '145', 'Oficina de Representación en Sinaloa', null, null),
        (34, 8, '146', 'Oficina de Representación en Sonora', null, null),
        (35, 8, '147', 'Oficina de Representación en Tabasco', null, null),
        (36, 8, '148', 'Oficina de Representación en Tamaulipas', null, null),
        (37, 8, '149', 'Oficina de Representación en Tlaxcala', null, null),
        (38, 8, '150', 'Oficina de Representación en Veracruz', null, null),
        (39, 8, '151', 'Oficina de Representación en Yucatán', null, null),
        (40, 8, '152', 'Oficina de Representación en Zacatecas', null, null),
        (41, 8, '153', 'Oficina de Representación en la Región Lagunera', null, null),
        (42, 8, '200', 'Subsecretaría de Autosuficiencia Alimentaria', null, null),
        (43, 8, '212', 'Dirección General de Organización para la Productividad', null, null),
        (44, 8, '214', 'Dirección General de la Autosuficiencia Alimentaria', null, null),
        (45, 8, '215', 'Dirección General de Apoyos Productivos Directos', null, null),
        (46, 8, '300', 'Coordinación General de Agricultura', null, null),
        (47, 8, '310', 'Dirección General de Fomento a la Agricultura', null, null),
        (48, 8, '311', 'Dirección General de Suelos y Agua', null, null),
        (49, 8, '312', 'Dirección General de Gestión de Riesgos', null, null),
        (50, 8, '314', 'Dirección General de Políticas, Prospección y Cambio Climático', null, null),
        (51, 8, '315', 'Dirección General de Valor Agregado y Mercados', null, null),
        (52, 8, '400', 'Coordinación General de Desarrollo Rural', null, null),
        (53, 8, '410', 'Dirección General de Fortalecimiento a la Agricultura Familiar', null, null),
        (54, 8, '411', 'Dirección General de Integración Económica', null, null),
        (55, 8, '413', 'Dirección General de Investigación, Desarrollo Tecnológico y Extensionismo', null, null),
        (56, 8, '500', 'Unidad de Administración y Finanzas', null, null),
        (57, 8, '510', 'Dirección General de Programación, Presupuesto y Finanzas', null, null),
        (58, 8, '511', 'Dirección General de Capital Humano y Desarrollo Organizacional', null, null),
        (59, 8, '512', 'Dirección General de Recursos Materiales, Inmuebles y Servicios', null, null),
        (60, 8, '513', 'Dirección General de Tecnologías de la Información y Comunicaciones', null, null),
        (61, 8, '600', 'Coordinación General de Inteligencia de Mercados Agroalimentarios', null, null),
        (62, 8, '610', 'Dirección General de Comercialización', null, null),
        (63, 8, '611', 'Dirección General de Administración de Riesgos de Precios', null, null),
        (64, 8, '612', 'Dirección General de Operación', null, null),
        (65, 8, '700', 'Coordinación General de Ganadería', null, null),
        (66, 8, '710', 'Dirección General de Repoblamiento Ganadero', null, null),
        (67, 8, '711', 'Dirección General de Sustentabilidad de Tierras de Uso Ganadero', null, null),
        (68, 8, 'A1I', 'Universidad Autónoma Chapingo', null, null),
        (69, 8, 'AFU', 'Comité Nacional para el Desarrollo Sustentable de la Caña de Azúcar', null, null),
        (70, 8, 'B00', 'Servicio Nacional de Sanidad, Inocuidad y Calidad Agroalimentaria', null, null),
        (71, 8, 'C00', 'Servicio Nacional de Inspección y Certificación de Semillas', null, null),
        (72, 8, 'D00', 'Colegio Superior Agropecuario del Estado de Guerrero', null, null),
        (73, 8, 'G00', 'Servicio de Información Agroalimentaria y Pesquera', null, null),
        (74, 8, 'I00', 'Comisión Nacional de Acuacultura y Pesca', null, null),
        (75, 8, 'I6L', 'Fideicomiso de Riesgo Compartido', null, null),
        (76, 8, 'I6U', 'Fondo de Empresas Expropiadas del Sector Azucarero', null, null),
        (77, 8, 'I9H', 'Instituto Nacional para el Desarrollo de Capacidades del Sector Rural, A.C.', null, null),
        (78, 8, 'IZC', 'Colegio de Postgraduados', null, null),
        (79, 8, 'IZI', 'Comisión Nacional de las Zonas Áridas', null, null),
        (80, 8, 'JAG', 'Instituto Nacional de Investigaciones Forestales, Agrícolas y Pecuarias', null, null),
        (81, 8, 'JBK', 'Productora Nacional de Biológicos Veterinarios', null, null),
        (82, 8, 'JBP', 'Seguridad Alimentaria Mexicana', null, null),
        (83, 8, 'RJL', 'Instituto Nacional de Pesca y Acuacultura', null, null),
        (84, 8, 'VSS', 'Diconsa, S.A. de C.V.', null, null),
        (85, 8, 'VST', 'Liconsa, S.A. de C.V.', null, null),
        (86, 15, '100', 'Secretaría', null, null),
        (87, 15, '110', 'Unidad de Asuntos Jurídicos', null, null),
        (88, 15, '113', 'Unidad de Planeación y Desarrollo Institucional', null, null),
        (89, 15, '114', 'Dirección General de Amparos y Ejecutorias', null, null),
        (90, 15, '115', 'Dirección General de Litigio Estratégico y Cumplimiento Normativo', null, null),
        (91, 15, '116', 'Dirección General de Legislación, Consulta y Pago de Predios', null, null),
        (92, 15, '120', 'Dirección General de Coordinación de Oficinas de Representación', null, null),
        (93, 15, '121', 'Oficina de Representación en Aguascalientes', null, null),
        (94, 15, '122', 'Oficina de Representación en Baja California', null, null),
        (95, 15, '123', 'Oficina de Representación en Baja California Sur', null, null),
        (96, 15, '124', 'Oficina de Representación en Campeche', null, null),
        (97, 15, '125', 'Oficina de Representación en Coahuila', null, null),
        (98, 15, '126', 'Oficina de Representación en Colima', null, null),
        (99, 15, '127', 'Oficina de Representación en Chiapas', null, null),
        (100, 15, '128', 'Oficina de Representación en Chihuahua', null, null),
        (101, 15, '129', 'Oficina de Representación en la Ciudad de México', null, null),
        (102, 15, '130', 'Oficina de Representación en Durango', null, null),
        (103, 15, '131', 'Oficina de Representación en Guanajuato', null, null),
        (104, 15, '132', 'Oficina de Representación en Guerrero', null, null),
        (105, 15, '133', 'Oficina de Representación en Hidalgo', null, null),
        (106, 15, '134', 'Oficina de Representación en Jalisco', null, null),
        (107, 15, '135', 'Oficina de Representación en el Estado de México', null, null),
        (108, 15, '136', 'Oficina de Representación en Michoacán', null, null),
        (109, 15, '137', 'Oficina de Representación en Morelos', null, null),
        (110, 15, '138', 'Oficina de Representación en Nayarit', null, null),
        (111, 15, '139', 'Oficina de Representación en Nuevo León', null, null),
        (112, 15, '140', 'Oficina de Representación en Oaxaca', null, null),
        (113, 15, '141', 'Oficina de Representación en Puebla', null, null),
        (114, 15, '142', 'Oficina de Representación en Querétaro', null, null),
        (115, 15, '143', 'Oficina de Representación en Quintana Roo', null, null),
        (116, 15, '144', 'Oficina de Representación en San Luis Potosí', null, null),
        (117, 15, '145', 'Oficina de Representación en Sinaloa', null, null),
        (118, 15, '146', 'Oficina de Representación en Sonora', null, null),
        (119, 15, '147', 'Oficina de Representación en Tabasco', null, null),
        (120, 15, '148', 'Oficina de Representación en Tamaulipas', null, null),
        (121, 15, '149', 'Oficina de Representación en Tlaxcala', null, null),
        (122, 15, '150', 'Oficina de Representación en Veracruz', null, null),
        (123, 15, '151', 'Oficina de Representación en Yucatán', null, null),
        (124, 15, '152', 'Oficina de Representación en Zacatecas', null, null),
        (125, 15, '200', 'Subsecretaría de Ordenamiento Territorial y Agrario', null, null),
        (126, 15, '210', 'Dirección General de Ordenamiento de la Propiedad Rural', null, null),
        (127, 15, '211', 'Dirección General de Concertación Agraria y Mediación', null, null),
        (128, 15, '212', 'Dirección General de Ordenamiento Territorial', null, null),
        (129, 15, '213', 'Coordinación General de Gestión Integral de Riesgos de Desastres', null, null),
        (130, 15, '214', 'Dirección General de Inventarios y Modernización Registral y Catastral', null, null),
        (131, 15, '400', 'Unidad de Administración y Finanzas', null, null),
        (132, 15, '410', 'Dirección General de Programación y Presupuesto', null, null),
        (133, 15, '411', 'Dirección General de Tecnologías de la Información y Comunicaciones', null, null),
        (134, 15, '412', 'Dirección General de Recursos Materiales y Servicios Generales', null, null),
        (135, 15, '413', 'Dirección General de Capital Humano y Desarrollo Organizacional', null, null),
        (136, 15, '500', 'Subsecretaría de Desarrollo Urbano y Vivienda', null, null),
        (137, 15, '510', 'Unidad de Apoyo a Programas de Infraestructura y Espacios Públicos', null, null),
        (138, 15, '511', 'Dirección General de Desarrollo Urbano, Suelo y Vivienda', null, null),
        (139, 15, '512', 'Unidad de Proyectos Estratégicos para el Desarrollo Urbano', null, null),
        (140, 15, '513', 'Dirección General de Desarrollo Regional', null, null),
        (141, 15, '514', 'Coordinación General de Desarrollo Metropolitano y Movilidad', null, null),
        (142, 15, 'B00', 'Registro Agrario Nacional', null, null),
        (143, 15, 'QCW', 'Comisión Nacional de Vivienda', null, null),
        (144, 15, 'QDV', 'Instituto Nacional del Suelo Sustentable', null, null),
        (145, 15, 'QEU', 'Fideicomiso Fondo Nacional de Fomento Ejidal', null, null),
        (146, 15, 'QEZ', 'Procuraduría Agraria', null, null),
        (147, 15, 'QIQ', 'Fideicomiso Fondo Nacional de Habitaciones Populares', null, null),
        (148, 16, '100', 'Secretaría', null, null),
        (149, 16, '109', 'Unidad Coordinadora de Asuntos Internacionales', null, null),
        (150, 16, '111', 'Coordinación General de Comunicación Social', null, null),
        (151, 16, '112', 'Unidad Coordinadora de Asuntos Jurídicos', null, null),
        (152, 16, '114', 'Unidad Coordinadora de Delegaciones', null, null),
        (153, 16, '115', 'Centro de Educación y Capacitación para el Desarrollo Sustentable', null, null),
        (154, 16, '116', 'Unidad Coordinadora de Participación Social y Transparencia', null, null),
        (155, 16, '118', 'Coordinación Regional de la Cuenca del Valle de México', null, null),
        (156, 16, '119', 'Coordinación Ejecutiva de Vinculación Institucional', null, null),
        (157, 16, '121', 'Delegación Federal en Aguascalientes', null, null),
        (158, 16, '122', 'Delegación Federal en Baja California', null, null),
        (159, 16, '123', 'Delegación Federal en Baja California Sur', null, null),
        (160, 16, '124', 'Delegación Federal en Campeche', null, null),
        (161, 16, '125', 'Delegación Federal en Coahuila', null, null),
        (162, 16, '126', 'Delegación Federal en Colima', null, null),
        (163, 16, '127', 'Delegación Federal en Chiapas', null, null),
        (164, 16, '128', 'Delegación Federal en Chihuahua', null, null),
        (165, 16, '130', 'Delegación Federal en Durango', null, null),
        (166, 16, '131', 'Delegación Federal en Guanajuato', null, null),
        (167, 16, '132', 'Delegación Federal en Guerrero', null, null),
        (168, 16, '133', 'Delegación Federal en Hidalgo', null, null),
        (169, 16, '134', 'Delegación Federal en Jalisco', null, null),
        (170, 16, '135', 'Delegación Federal en México', null, null),
        (171, 16, '136', 'Delegación Federal en Michoacán', null, null),
        (172, 16, '137', 'Delegación Federal en Morelos', null, null),
        (173, 16, '138', 'Delegación Federal en Nayarit', null, null),
        (174, 16, '139', 'Delegación Federal en Nuevo León', null, null),
        (175, 16, '140', 'Delegación Federal en Oaxaca', null, null),
        (176, 16, '141', 'Delegación Federal en Puebla', null, null),
        (177, 16, '142', 'Delegación Federal en Querétaro', null, null),
        (178, 16, '143', 'Delegación Federal en Quintana Roo', null, null),
        (179, 16, '144', 'Delegación Federal en San Luis Potosí', null, null),
        (180, 16, '145', 'Delegación Federal en Sinaloa', null, null),
        (181, 16, '146', 'Delegación Federal en Sonora', null, null),
        (182, 16, '147', 'Delegación Federal en Tabasco', null, null),
        (183, 16, '148', 'Delegación Federal en Tamaulipas', null, null),
        (184, 16, '149', 'Delegación Federal en Tlaxcala', null, null),
        (185, 16, '150', 'Delegación Federal en Veracruz', null, null),
        (186, 16, '151', 'Delegación Federal en Yucatán', null, null),
        (187, 16, '152', 'Delegación Federal en Zacatecas', null, null),
        (188, 16, '400', 'Subsecretaría de Planeación y Política Ambiental', null, null),
        (189, 16, '410', 'Dirección General de Planeación y Evaluación', null, null),
        (190, 16, '411', 'Dirección General de Estadística e Información Ambiental', null, null),
        (191, 16, '413', 'Dirección General de Política Ambiental e Integración Regional y Sectorial', null, null),
        (192, 16, '414', 'Dirección General de Políticas para el Cambio Climático', null, null),
        (193, 16, '500', 'Unidad de Administración y Finanzas', null, null),
        (194, 16, '510', 'Dirección General de Desarrollo Humano y Organización', null, null),
        (195, 16, '511', 'Dirección General de Programación y Presupuesto', null, null),
        (196, 16, '512', 'Dirección General de Recursos Materiales, Inmuebles y Servicios', null, null),
        (197, 16, '513', 'Dirección General de Informática y Telecomunicaciones', null, null),
        (198, 16, '600', 'Subsecretaría de Fomento y Normatividad Ambiental', null, null),
        (199, 16, '610', 'Dirección General de Industria', null, null),
        (200, 16, '611', 'Dirección General del Sector Primario y Recursos Naturales Renovables', null, null),
        (201, 16, '612', 'Dirección General de Fomento Ambiental, Urbano y Turístico', null, null),
        (202, 16, '614', 'Dirección General de Energía y Actividades Extractivas', null, null),
        (203, 16, '700', 'Subsecretaría de Gestión para la Protección Ambiental', null, null),
        (204, 16, '710', 'Dirección General de Gestión Integral de Materiales y Actividades Riesgosas', null, null),
        (205, 16, '711', 'Dirección General de Impacto y Riesgo Ambiental', null, null),
        (206, 16, '712', 'Dirección General de Gestión Forestal y de Suelos', null, null),
        (207, 16, '713', 'Dirección General de Vida Silvestre', null, null),
        (208, 16, '714', 'Dirección General de Zona Federal Marítimo Terrestre y Ambientes Costeros', null, null),
        (209, 16, '715', 'Dirección General de Gestión de la Calidad del Aire y Registro de Emisiones y Transferencia de Contaminantes', null, null),
        (210, 16, 'B00', 'Comisión Nacional del Agua', null, null),
        (211, 16, 'E00', 'Procuraduría Federal de Protección al Ambiente', null, null),
        (212, 16, 'F00', 'Comisión Nacional de Áreas Naturales Protegidas', null, null),
        (213, 16, 'G00', 'Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos', null, null),
        (214, 16, 'RHQ', 'Comisión Nacional Forestal', null, null),
        (215, 16, 'RJE', 'Instituto Mexicano de Tecnología del Agua', null, null),
        (216, 16, 'RJJ', 'Instituto Nacional de Ecología y Cambio Climático', null, null),
        (217, 18, '100', 'Secretaría', null, null),
        (218, 18, '111', 'Dirección General de Asuntos Internacionales', null, null),
        (219, 18, '112', 'Dirección General de Comunicación Social', null, null),
        (220, 18, '114', 'Dirección General de Vinculación Interinstitucional', null, null),
        (221, 18, '115', 'Dirección General de Coordinación', null, null),
        (222, 18, '116', 'Dirección General de Relación con Inversionistas y Promoción', null, null),
        (223, 18, '117', 'Dirección General de Impacto Social y Ocupación Superficial', null, null),
        (224, 18, '120', 'Unidad de Asuntos Jurídicos', null, null),
        (225, 18, '121', 'Dirección General Consultiva', null, null),
        (226, 18, '200', 'Subsecretaría de Planeación y Transición Energética', null, null),
        (227, 18, '210', 'Dirección General de Planeación e Información Energéticas', null, null),
        (228, 18, '211', 'Dirección General de Energías Limpias', null, null),
        (229, 18, '212', 'Dirección General de Eficiencia y Sustentabilidad Energética', null, null),
        (230, 18, '213', 'Dirección General de Investigación, Desarrollo Tecnológico y Formación de Recursos Humanos', null, null),
        (231, 18, '300', 'Subsecretaría de Electricidad', null, null),
        (232, 18, '311', 'Dirección General de Generación y Transmisión Energía Eléctrica', null, null),
        (233, 18, '314', 'Dirección General de Distribución y Comercialización de Energía Eléctrica y Vinculación Social', null, null),
        (234, 18, '315', 'Dirección General de Análisis y Vigilancia del Mercado Eléctrico', null, null),
        (235, 18, '316', 'Unidad del Sistema Eléctrico Nacional y Política Nuclear', null, null),
        (236, 18, '317', 'Dirección General de Reestructuración y Supervisión de Empresas y Organismos del Estado en el Sector Eléctrico', null, null),
        (237, 18, '318', 'Dirección General de Seguimiento y Coordinación de la Industria Eléctrica', null, null),
        (238, 18, '400', 'Unidad de Administración y Finanzas', null, null),
        (239, 18, '410', 'Dirección General de Recursos Humanos, Materiales y Servicios Generales', null, null),
        (240, 18, '411', 'Dirección General de Programación y Presupuesto', null, null),
        (241, 18, '412', 'Dirección General de Tecnologías de Información y Comunicaciones', null, null),
        (242, 18, '413', 'Unidad de Enlace, Mejora Regulatoria y Programas Transversales', null, null),
        (243, 18, '500', 'Subsecretaría de Hidrocarburos', null, null),
        (244, 18, '515', 'Dirección General de Normatividad en Hidrocarburos', null, null),
        (245, 18, '520', 'Unidad de Políticas de Exploración y Extracción de Hidrocarburos', null, null),
        (246, 18, '521', 'Dirección General de Exploración y Extracción de Hidrocarburos', null, null),
        (247, 18, '522', 'Dirección General de Contratos Petroleros', null, null),
        (248, 18, '530', 'Unidad de Políticas de Transformación Industrial', null, null),
        (249, 18, '531', 'Dirección General de Gas Natural y Petroquímicos', null, null),
        (250, 18, '532', 'Dirección General de Petrolíferos', null, null),
        (251, 18, 'A00', 'Comisión Nacional de Seguridad Nuclear y Salvaguardias', null, null),
        (252, 18, 'E00', 'Comisión Nacional para el Uso Eficiente de la Energía', null, null),
        (253, 18, 'T0K', 'Instituto Nacional de Electricidad y Energías Limpias', null, null),
        (254, 18, 'T0O', 'Instituto Mexicano del Petróleo', null, null),
        (255, 18, 'T0Q', 'Instituto Nacional de Investigaciones Nucleares', null, null),
        (256, 18, 'TOM', 'Centro Nacional de Control de Energía', null, null),
        (257, 18, 'TON', 'Centro Nacional de Control del Gas Natural', null, null),
        (258, 18, 'TQA', 'Compañía Mexicana de Exploraciones, S.A. de C.V.', null, null),
        (259, 53, 'TVV', 'CFE Consolidado', null, null),
        (260, 53, 'UHI', 'CFE Distribución', null, null),
        (261, 53, 'UHN', 'CFE Generación I', null, null),
        (262, 53, 'UHS', 'CFE Generación II', null, null),
        (263, 53, 'UHX', 'CFE Generación III', null, null),
        (264, 53, 'UIC', 'CFE Generación IV', null, null),
        (265, 53, 'UIH', 'CFE Generación V', null, null),
        (266, 53, 'UIM', 'CFE Generación VI', null, null),
        (267, 53, 'UIR', 'CFE Suministrador de Servicios Básicos', null, null),
        (268, 53, 'UIT', 'CFE Telecomunicaciones e Internet para Todos', null, null),
        (269, 53, 'UIW', 'CFE Transmisión', null, null),
        (270, 53, 'UJB', 'CFE Corporativo', null, null);";
    }
}
