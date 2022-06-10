<?php

namespace App\Exports;


use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class JsonExport implements FromArray, WithHeadings
{

    private $array;

    /**
     * @param $array
     */
    public function __construct($array) {

        $this->array = $array;
    }


    public function array(): array {
        return $this->array;
    }

    public function headings(): array
    {
        return [
            'Programa Transversal',
            'Ramo',
            'Unidad Responsable',
            '(Cf)Unidad',
            '(Cf)Finalidad',
            '(Cf)Función',
            '(Cf)Subfunción',
            '(Cf)Reasignación',
            '(Cf)Actividad Institucional',
            '(Cf)Modalidad',
            '(Cf)Programa Presupuestario',
            '(Cf)Partida',
            '(Cf)Tipo de Gasto',
            '(Cf)Fuente Financiamiento',
            '(Cf)Vertiente PEC',
            '(Cf)Programa PEC',
            '(Cf)Componente PEC',
            '(Cf)Subcomponente PEC',
            '(Cf)Rama Productiva',
            '(Cf)Geográfico',
            '(Cf)Municipio',
            '(Cf)Factor',
            '(Cf)Importe',
            'Observaciones de Concertación'
        ];
    }
}
