<?php
declare(strict_types = 1);
namespace App\Http\Controllers\Api\Informe;

use App\Http\Controllers\Api\Base\BaseUpdateController;
use App\Http\DTOs\Informe\InformeResource;
use App\Http\Requests\InformeRequest;
use App\services\InformeService;

class InformeUpdateController extends BaseUpdateController{

    public function __construct(InformeService $InformeService,InformeRequest $request)
    {
        parent::__construct($InformeService,$request,InformeResource::class);
    }
}
