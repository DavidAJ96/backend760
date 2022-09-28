<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\EspacioCurricular;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\EspacioCurricular\EspacioCurricularResource;
use App\services\EspacioCurricularService;

class EspacioCurricularDeleteController extends BaseDelete {

    public function __construct(EspacioCurricularService $espacioCurricularService)
    {
        parent::__construct($espacioCurricularService,EspacioCurricularResource::class);
    }
}
