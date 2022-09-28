<?php
namespace App\Http\Controllers\Api\DesignacionCargo;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\DesignacionCargo\DesignacionCargoCollection;
use App\services\DesignacionCargoService;
use Illuminate\Http\Request;

class DesignacionCargoIndexController extends BaseIndex {
    public function __construct(DesignacionCargoService $designacionCargoService, Request $request)
    {
        parent::__construct($designacionCargoService,$request,DesignacionCargoCollection::class);
    }


}
