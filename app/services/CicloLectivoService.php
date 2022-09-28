<?php
namespace App\services;

use App\Exports\CursoExport;
use App\repositories\CicloLectivoRepository;
use Illuminate\Http\Request;

class CicloLectivoService extends BaseService{
    public function __construct()
    {
        parent::__construct(new CicloLectivoRepository());
        $this->setNameOfExcelExport(null);
        $this->setFileName("");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);
        if(is_string($filters->cue_escuela)){
            $this->getRepository()->filterByCueEscuela($filters->cue_escuela);
        }

        if(is_string($filters->nombre_ciclo)){
            $this->getRepository()->filterByNombreCiclo($filters->nombre_ciclo);
        }

    }
}
