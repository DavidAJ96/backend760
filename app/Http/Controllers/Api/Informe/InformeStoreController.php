<?php
namespace App\Http\Controllers\Api\Informe;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\Informe\InformeResource;
use App\Http\Requests\InformeRequest;
use App\services\InformeService;

class InformeStoreController extends BaseStore {
    public function __construct(InformeService $InformeService, InformeRequest $request)
    {
      parent::__construct($InformeService,$request,InformeResource::class);
    }
}
