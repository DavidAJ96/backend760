<?php

namespace App\Exports;

use App\Http\DTOs\Alumno\AlumnoCollection;
use App\Models\Alumno;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class AlumnoExport  extends BaseExport
{
    public function __construct(AlumnoCollection $alumnoCollection)
    {
        parent::__construct($alumnoCollection);
        $this->setRangoHeader('A2:F2');
        $this->setViewExcel('exports.excel.datos_alumno');
        $this->setViewPDF('exports.excel.datos_alumno');
        $this->setColumnsWith(['A'=>20,'B'=>20,'C'=>40,'D'=>25,'E'=>60,'F'=>30]);
        $this->setReportTitle('Datos de los Alumnos');
    }

}
