<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Persona;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\Persona\PersonaResource;
use App\services\PersonaService;
use Illuminate\Http\Request;

class PersonaShowController extends BaseIndex{

    public function __construct(PersonaService $servicio, Request $req)
    {
       parent::__construct($servicio,$req);
    }

    public function __invoke($id)
    {
       return $this->responseSuccess(new PersonaResource( $this->getService()->find($id)));
    }

}
