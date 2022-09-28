<?php

namespace App\Exports;

use App\Http\DTOs\Agente\AgenteCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class AgenteExport  extends BaseExport
{
    public function __construct(AgenteCollection $agenteCollection)
    {
        parent::__construct($agenteCollection);
        $this->setRangoHeader('A2:F2');
        $this->setViewExcel('exports.excel.datos_agente');
        $this->setViewPDF('exports.pdf.datos_agente');
        $this->setColumnsWith(['A'=>20,'B'=>40,'C'=>15,'D'=>25,'E'=>60,'F'=>30]);
        $this->setReportTitle('Reporte de Agentes');
    }

}
