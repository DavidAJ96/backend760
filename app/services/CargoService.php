<?php
namespace App\services;

use App\Exports\CargoExport;
use App\repositories\CargoRepository;
use Illuminate\Http\Request;

class CargoService extends BaseService{
    public function __construct()
    {
        parent::__construct(new CargoRepository());
        $this->setNameOfExcelExport(CargoExport::class);
        $this->setFileName("cargos_institucion");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);

        if(is_string($filters['nombre_cargo'])){
            $this->getRepository()->filterByIdPlanEstudio($filters['nombre_cargo']);
        }

        if(is_string($filters['estado'])){
            $this->getRepository()->filterByIdPlanEstudio($filters['estado']);
        }

    }

}
