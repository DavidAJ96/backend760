<?php
namespace App\services;

use App\Exports\LocalidadExport;
use App\repositories\LocalidadRepository;
use Illuminate\Http\Request;

class LocalidadService extends BaseService{
    public function __construct()
    {
        parent::__construct(new LocalidadRepository());
        $this->setNameOfExcelExport(null);
        $this->setFileName("");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);

        if(is_numeric($filters['id_provincia'])){
            $this->getRepository()->filterByIdProvincia($filters['id_provincia']);
        }

    }

}
