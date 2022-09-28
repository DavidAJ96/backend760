<?php
namespace App\services;

use App\Exports\PlanEstudioExport;
use App\repositories\PlanEstudioRepository;
use Illuminate\Http\Request;

class PlanEstudioService extends BaseService{
    public function __construct()
    {
        parent::__construct(new PlanEstudioRepository());
        $this->setNameOfExcelExport(PlanEstudioExport::class);
        $this->setFileName("Planes_estudio");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);

        if(is_string($filters['ley_equivalencia'])){
            $this->getRepository()->filterByLeyEquivalencia($filters['ley_equivalencia']);
        }

        if(is_string($filters['norma_dictamen'])){
            $this->getRepository()->filterByNormaDictamen($filters['norma_dictamen']);
        }

        if(is_string($filters['ley_aprobacion'])){
            $this->getRepository()->filterByNormaDictamen($filters['norma_dictamen']);
        }
    }

}
