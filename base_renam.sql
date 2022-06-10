create table accion
(
    id                                 int auto_increment
        primary key,
    entidad_persona_responsable_id     int           null,
    nombre                             varchar(255)  null,
    objetivo                           varchar(255)  null,
    descripcion                        varchar(255)  null,
    problematica                       varchar(255)  null,
    relacion_marco_regulatorio         varchar(255)  null,
    meta                               varchar(255)  null,
    medidas_adaptadas                  varchar(255)  null,
    periodo_implementacion_inicial     date          null,
    periodo_implementacion_final       date          null,
    sostenibilidad_largo_plazo         varchar(255)  null,
    riesgos                            varchar(255)  null,
    requiere_nota_no_objecion          tinyint(1)    null,
    presupuesto_monto                  decimal(8, 2) null,
    costo_financiamiento_monto         decimal(8, 2) null,
    gestion_para_financiamiento        varchar(255)  null,
    meta_toneladas_co2eq               int           null,
    aplica_sistema_mvc                 tinyint(1)    null,
    valor_estimado_remocion_co2eq      int           null,
    tipo_id                            int           null,
    estado_id                          int           null,
    estado_financiamiento_id           int           null,
    ubicacion_id                       int           null,
    ipcc_impactado_sector_id           int           null,
    ipcc_impactado_sector_categoria_id int           null,
    linea_base_id                      int           null
);

create table entidad_persona_responsable
(
    id                  int auto_increment
        primary key,
    entidad_id          int          null,
    persona_responsable varchar(255) null
);

create table estado
(
    id     int auto_increment
        primary key,
    nombre varchar(255) null
);

create table tipo
(
    id                int auto_increment
        primary key,
    tipo_categoria_id int          null,
    nombre            varchar(255) null
);

create table ubicacion
(
    id                   int auto_increment
        primary key,
    accion_id            int          null,
    escala_geografica_id int          null,
    provincia            varchar(255) null,
    distrito             varchar(255) null,
    corregimiento        varchar(255) null,
    direccion            varchar(255) null,
    mapa_cordenadas      varchar(255) null
);

