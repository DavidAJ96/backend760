<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\CicloLectivo;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\CicloLectivo\CicloLectivoResource;
use App\services\CicloLectivoService;

class CicloLectivoShowController extends BaseShowController{

    public function __construct(CicloLectivoService $servicio)
    {
       parent::__construct($servicio,CicloLectivoResource::class);
    }

}
