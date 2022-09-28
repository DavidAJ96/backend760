<?php
namespace App\services;

use App\Exports\AnioEscolarExport;
use App\Exports\PlanEstudioExport;
use App\repositories\AnioEscolarRepository;
use App\repositories\PlanEstudioRepository;
use Illuminate\Http\Request;

class AnioEscolarService extends BaseService{
    public function __construct()
    {
        parent::__construct(new AnioEscolarRepository());
        $this->setNameOfExcelExport(AnioEscolarExport::class);
        $this->setFileName("anios_escolares_por_plan");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);

        if(is_numeric($filters['id_plan_estudio'])){
            $this->getRepository()->filterByIdPlanEstudio($filters['id_plan_estudio']);
        }

    }

}
