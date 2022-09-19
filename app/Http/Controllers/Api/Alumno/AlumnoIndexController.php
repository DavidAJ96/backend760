<?php
namespace App\Http\Controllers\Api\Alumno;

use App\Exports\AlumnoExport;
use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\Alumno\AlumnoCollection;
use App\services\AlumnoService;
use Illuminate\Http\Request;

class AlumnoIndexController extends BaseIndex {
    public function __construct(AlumnoService $personaService, Request $request)
    {
        parent::__construct($personaService,$request,AlumnoCollection::class,AlumnoExport::class);
    }


}
