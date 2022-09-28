<?php
namespace App\Http\Controllers\Api\CicloLectivo;

use App\Http\Controllers\Api\Base\BaseStore;
use App\Http\DTOs\CicloLectivo\CicloLectivoResource;
use App\Http\Requests\CicloLectivoRequest;
use App\services\CicloLectivoService;

class CicloLectivoStoreController extends BaseStore {
    public function __construct(CicloLectivoService $cicloLectivoService, CicloLectivoRequest $request)
    {
      parent::__construct($cicloLectivoService,$request,CicloLectivoResource::class);
    }
}
