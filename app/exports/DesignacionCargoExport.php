<?php

namespace App\Exports;

use App\Http\DTOs\DesignacionCargo\DesignacionCargoCollection;
use Maatwebsite\Excel\Concerns\FromCollection;

class DesignacionCargoExport extends BaseExport
{
        public function __construct(DesignacionCargoCollection $designacionCollection)
        {
            parent::__construct($designacionCollection);
            $this->setReportTitle('Listado de designaciones por cargo');
            $this->setViewExcel('exports.excel.datos_designacion_cargo');
            $this->setColumnsWith([]);
        }
}
