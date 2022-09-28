<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\EspacioCurricular;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\EspacioCurricular\EspacioCurricularResource;
use App\Http\Requests\EspacioCurricularRequest;
use App\services\EspacioCurricularService;

class EspacioCurricularUpdateController extends BaseUpdateController{

    public function __construct(EspacioCurricularService $espacioCurricularService,EspacioCurricularRequest $request)
    {
        parent::__construct($espacioCurricularService,$request,EspacioCurricularResource::class);
    }
}
