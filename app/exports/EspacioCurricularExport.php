<?php

namespace App\Exports;

use App\Http\DTOs\EspacioCurricular\EspacioCurricularCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class EspacioCurricularExport extends BaseExport
{


    public function __construct(EspacioCurricularCollection $espacioCurricularCollection)
    {
       parent::__construct($espacioCurricularCollection);
       $this->setViewExcel('exports.excel.datos_espacio_curricular');
       $this->setRangoHeader('A2:D2');
       $this->setReportTitle('Reporte de Espacios Curriculares');

    }


}
