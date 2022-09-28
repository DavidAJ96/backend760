<?php
namespace App\services;

use App\Exports\AgenteExport;
use App\Exports\AlumnoExport;
use App\repositories\AgenteRepository;

class AgenteService extends AlumnoService{
    public function __construct()
    {
        $this->repository = new AgenteRepository();
        $this->setNameOfExcelExport(AgenteExport::class);
        $this->setFileName("Listado_Agentes");
    }


}
