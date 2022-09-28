<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Informe;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\Informe\InformeResource;
use App\services\InformeService;

class InformeShowController extends BaseShowController{

    public function __construct(InformeService $servicio)
    {
       parent::__construct($servicio,InformeResource::class);
    }

}
