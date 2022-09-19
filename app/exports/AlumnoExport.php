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

class AlumnoExport implements FromView,WithEvents
{
    private AlumnoCollection $alumnoCollection;

    public function __construct(AlumnoCollection $alumnoCollection)
    {
        $this->alumnoCollection = $alumnoCollection;
    }

    public function view(): View
    {
        return View('exports.datos_alumno',['registros'=>$this->collection()]);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  $this->alumnoCollection;
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getStyle('A1:W2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
            },
        ];
    }
}
