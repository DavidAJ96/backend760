<?php
namespace App\services;

use App\Exports\CursoExport;
use App\repositories\CursoRepository;
use Illuminate\Http\Request;

class CursoService extends BaseService{
    public function __construct()
    {
        parent::__construct(new CursoRepository());
        $this->setNameOfExcelExport(CursoExport::class);
        $this->setFileName("listado de Cursos");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);
        if(is_string($filters->curso)){
            $this->getRepository()->filterByAnioAndDivision($filters->curso);
        }

        if(is_string($filters->nombre_agente)){
            $this->getRepository()->filterByNombreTutor($filters->nombre_agente);
            $this->getRepository()->filterByNombrePreceptor($filters->nombre_agente);

        }
        if(is_string($filters->documento_agente)){
            $this->getRepository()->filterByDocumentoPreceptor($filters->documento_agente);
            $this->getRepository()->filterByDocumentoTutor($filters->documento_agente);
        }


        if(is_numeric($filters->idPlan)){
            $this->getRepository()->filterByIdPlan($filters->id_plan);
        }


    }

}
