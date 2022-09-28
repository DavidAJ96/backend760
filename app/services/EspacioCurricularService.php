<?php

namespace App\services;

use App\Exports\EspacioCurricularExport;
use App\repositories\EspacioCurricularRepository;
use Illuminate\Http\Request;

class EspacioCurricularService extends BaseService
{
    public function __construct()
    {
        parent::__construct(new EspacioCurricularRepository());
        $this->setNameOfExcelExport(EspacioCurricularExport::class);
        $this->setFileName("espacios_curriculares");
    }

    public function setFilter(Request $filters)
    {
        $this->getRepository()->search($filters->search);

        if (is_numeric($filters['id_anio_escolar'])) {
            $this->getRepository()->filterByIdAnioEscolar($filters['id_anio_escolar']);
        }

        if (is_numeric($filters['id_plan_estudio'])) {
            $this->getRepository()->filterByIdPlanEstudio($filters['id_plan_estudio']);
        }
    }
}
