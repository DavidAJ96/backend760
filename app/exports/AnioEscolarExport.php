<?php

namespace App\Exports;

use App\Http\DTOs\AnioEscolar\AnioEscolarCollection;

class AnioEscolarExport  extends BaseExport{


    public function __construct(AnioEscolarCollection $anioEscolarCollection)
    {
        parent::__construct($anioEscolarCollection);
        $this->setViewExcel('exports.excel.datos_anio_escolar');
        $this->setViewPDF('exports.pdf.datos_anio_escolar');
        $this->setRangoHeader('A2:B2');
        $this->setReportTitle('Anio Escolar');
        $this->setColumnsWith(['A'=>20,'B'=>60]);
    }


}
