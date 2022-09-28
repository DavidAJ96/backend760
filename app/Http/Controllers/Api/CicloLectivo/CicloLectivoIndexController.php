<?php
namespace App\Http\Controllers\Api\CicloLectivo;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\CicloLectivo\CicloLectivoCollection;
use App\services\CicloLectivoService;
use Illuminate\Http\Request;

class CicloLectivoIndexController extends BaseIndex {
    public function __construct(CicloLectivoService $cicloLectivoService, Request $request)
    {
        parent::__construct($cicloLectivoService,$request,CicloLectivoCollection::class);
    }


}
