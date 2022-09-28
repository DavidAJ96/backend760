<?php
namespace App\services;

use App\Exports\CargoExport;
use App\repositories\InformeRepository;
use Illuminate\Http\Request;

class InformeService extends BaseService{
    public function __construct()
    {
        parent::__construct(new InformeRepository());
        $this->setNameOfExcelExport(null);
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);

        if(is_string($filters['nombre'])){
            $this->getRepository()->filterByNombreInforme($filters['nombre']);
        }

        if(is_string($filters['leyenda'])){
            $this->getRepository()->filterByLeyenda($filters['leyenda']);
        }

    }

}
