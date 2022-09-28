<?php
namespace App\Http\Controllers\Api\PlanEstudio;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\PlanEstudio\PlanEstudioCollection;
use App\services\PlanEstudioService;
use Illuminate\Http\Request;

class PlanEstudioIndexController extends BaseIndex {
    public function __construct(PlanEstudioService $personaService, Request $request)
    {
        parent::__construct($personaService,$request,PlanEstudioCollection::class);
    }


}
