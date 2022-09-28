<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\CicloLectivo;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\CicloLectivo\CicloLectivoResource;
use App\services\CicloLectivoService;

class CicloLectivoDeleteController extends BaseDelete {

    public function __construct(CicloLectivoService $cicloLectivoService)
    {
        parent::__construct($cicloLectivoService,CicloLectivoResource::class);
    }
}
