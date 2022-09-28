<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Informe;

use App\Http\Controllers\Api\Base\BaseDelete;
use App\Http\DTOs\Informe\InformeResource;
use App\services\InformeService;

class InformeDeleteController extends BaseDelete {

    public function __construct(InformeService $informeService)
    {
        parent::__construct($informeService,InformeResource::class);
    }
}
