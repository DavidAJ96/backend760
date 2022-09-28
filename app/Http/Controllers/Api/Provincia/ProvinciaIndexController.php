<?php
namespace App\Http\Controllers\Api\Provincia;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\Provincia\ProvinciaCollection;
use App\services\ProvinciaService;
use Illuminate\Http\Request;

class ProvinciaIndexController extends BaseIndex {
    public function __construct(ProvinciaService $ProvinciaService, Request $request)
    {
        parent::__construct($ProvinciaService,$request,ProvinciaCollection::class);
    }


}
