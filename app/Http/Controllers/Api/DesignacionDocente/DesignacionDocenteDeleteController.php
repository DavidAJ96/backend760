<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\DesignacionDocente;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\DesignacionDocente\DesignacionDocenteResource;
use App\services\DesignacionDocenteService;

class DesignacionDocenteDeleteController extends BaseDelete {

    public function __construct(DesignacionDocenteService $designacionDocenteService)
    {
        parent::__construct($designacionDocenteService,DesignacionDocenteResource::class);
    }
}
