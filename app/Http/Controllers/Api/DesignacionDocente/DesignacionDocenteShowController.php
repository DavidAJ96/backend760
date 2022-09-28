<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\DesignacionDocente;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\DesignacionDocente\DesignacionDocenteResource;
use App\services\DesignacionDocenteService;

class DesignacionDocenteShowController extends BaseShowController{

    public function __construct(DesignacionDocenteService $servicio)
    {
       parent::__construct($servicio,DesignacionDocenteResource::class);
    }

}
