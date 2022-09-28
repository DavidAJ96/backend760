<?php
namespace App\Http\Controllers\Api\EspacioCurricular;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\AnioEscolar\AnioEscolarCollection;
use App\Http\DTOs\EspacioCurricular\EspacioCurricularCollection;
use App\services\AnioEscolarService;
use App\services\EspacioCurricularService;
use Illuminate\Http\Request;

class EspacioCurricularIndexController extends BaseIndex {
    public function __construct(EspacioCurricularService $espacioCurricularService, Request $request)
    {
        parent::__construct($espacioCurricularService,$request,EspacioCurricularCollection::class);
    }


}
