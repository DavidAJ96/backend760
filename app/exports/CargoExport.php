<?php

namespace App\Exports;

use App\Http\DTOs\Cargo\CargoCollection;
use Maatwebsite\Excel\Concerns\FromCollection;

class CargoExport extends BaseExport
{
    public function __construct(CargoCollection $cargoCollection)
    {
        parent::__construct($cargoCollection);
        $this->setViewExcel('exports.excel.datos_cargo');
        $this->setReportTitle('Listado de Cargos');
        $this->setRangoHeader('A2:D2');

        $this->setColumnsWith(['A'=>20,'B'=>20,'C'=>40,'D'=>20]);
    }
}
