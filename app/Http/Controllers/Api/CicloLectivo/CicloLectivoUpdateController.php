<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\CicloLectivo;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\CicloLectivo\CicloLectivoResource;
use App\Http\Requests\CicloLectivoRequest;
use App\services\CicloLectivoService;

class CicloLectivoUpdateController extends BaseUpdateController{

    public function __construct(CicloLectivoService $cicloLectivoService,CicloLectivoRequest $request)
    {
        parent::__construct($cicloLectivoService,$request,CicloLectivoResource::class);
    }
}
