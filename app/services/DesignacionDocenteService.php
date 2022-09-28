<?php
namespace App\services;

use App\Exports\DesignacionCargoExport;
use App\repositories\DesignacionDocenteRepo;
use Illuminate\Http\Request;

class DesignacionDocenteService extends BaseService{
    public function __construct()
    {
        parent::__construct(new DesignacionDocenteRepo());
        $this->setNameOfExcelExport(DesignacionCargoExport::class);
        $this->setFileName("designaciones de espacios por institucion");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);

        if(is_numeric($filters['id_espacio_curricular'])){
            $this->getRepository()->filterByIdEspacioCurricular($filters['id_cargo']);
        }

        if(is_numeric($filters['id_curso'])){
            $this->getRepository()->filterByIdCurso($filters['id_curso']);
        }


        if(is_numeric($filters['id_agente'])){
            $this->getRepository()->filterByIdAgente($filters['id_agente']);
        }

        if(is_string($filters['documento_agente'])){
            $this->getRepository()->filterByNombreAgente($filters['documento_agente']);
        }

        if(is_string($filters['nombre_agente'])){
            $this->getRepository()->filterByDocumentoAgente($filters['nombre_agente']);
        }

        if(is_string($filters['nombre_espacio'])){
            $this->getRepository()->filterByNombreEspacio($filters['nombre_espacio']);
        }

    }

}
