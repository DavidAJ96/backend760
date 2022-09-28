<?php
namespace App\services;

use App\Exports\DesignacionCargoExport;
use App\repositories\DesignacionCargoRepo;
use Illuminate\Http\Request;

class DesignacionCargoService extends BaseService{
    public function __construct()
    {
        parent::__construct(new DesignacionCargoRepo());
        $this->setNameOfExcelExport(DesignacionCargoExport::class);
        $this->setFileName("designaciones de cargos por institucion");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);

        if(is_numeric($filters['id_cargo'])){
            $this->getRepository()->filterByIdCargo($filters['id_cargo']);
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

        if(is_string($filters['nombre_cargo'])){
            $this->getRepository()->filterByNombreCargo($filters['nombre_cargo']);
        }

    }

}
