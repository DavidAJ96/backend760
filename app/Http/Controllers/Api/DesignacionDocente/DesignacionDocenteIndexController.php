<?php
namespace App\Http\Controllers\Api\DesignacionDocente;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\DesignacionDocente\DesignacionDocenteCollection;
use App\services\DesignacionDocenteService;
use Illuminate\Http\Request;

class DesignacionDocenteIndexController extends BaseIndex {
    public function __construct(DesignacionDocenteService $designacionDocenteService, Request $request)
    {
        parent::__construct($designacionDocenteService,$request,DesignacionDocenteCollection::class);
    }


}
