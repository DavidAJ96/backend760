<?php

namespace App\Exports;

use App\Http\DTOs\Alumno\AlumnoCollection;
use App\Models\Alumno;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class AlumnoExport implements FromView
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
}
