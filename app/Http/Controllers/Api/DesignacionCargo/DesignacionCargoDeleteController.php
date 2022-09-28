<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\DesignacionCargo;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Models\DesignacionCargo;
use App\services\DesignacionCargoService;

class DesignacionCargoDeleteController extends BaseDelete {

    public function __construct(DesignacionCargoService $designacionCargoService)
    {
        parent::__construct($designacionCargoService,DesignacionCargo::class);
    }
}
