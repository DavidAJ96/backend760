<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Curso;
use App\Http\Controllers\Api\Base\BaseShowController;
use App\Http\DTOs\Curso\CursoResource;
use App\services\CursoService;

class CursoShowController extends BaseShowController{

    public function __construct(CursoService $servicio)
    {
       parent::__construct($servicio,CursoResource::class);
    }

}
