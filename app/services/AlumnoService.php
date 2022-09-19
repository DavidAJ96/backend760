<?php
namespace App\services;

use App\Exports\AlumnoExport;
use App\Http\Requests\PersonaRequest;
use App\repositories\AlumnoRepository;
use Illuminate\Http\Request;

class AlumnoService extends BaseService{
    public function __construct()
    {
        parent::__construct(new AlumnoRepository());
        $this->setNameOfExcelExport(AlumnoExport::class);
        $this->setFileName("Listado_Alumnos");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);
        $this->getRepository()->filterByNacionalidad($filters->id_nacionalidad);
        $this->getRepository()->filterByLocalidad($filters->id_localidad);
        $this->getRepository()->filterByGenero($filters->genero);
    }

}
