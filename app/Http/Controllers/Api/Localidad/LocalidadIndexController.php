<?php
namespace App\Http\Controllers\Api\Localidad;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\Localidad\LocalidadCollection;
use App\services\LocalidadService;
use Illuminate\Http\Request;

class LocalidadIndexController extends BaseIndex {
    public function __construct(LocalidadService $LocalidadService, Request $request)
    {
        parent::__construct($LocalidadService,$request,LocalidadCollection::class);
    }


}
