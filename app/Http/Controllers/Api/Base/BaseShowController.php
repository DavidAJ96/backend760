<?php
declare( strict_types = 1);
namespace App\Http\Controllers\Api\Base;

use App\Http\Controllers\Api\Base\BaseController;
use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\Persona\PersonaResource;
use App\services\BaseService;
use App\services\PersonaService;
use InvalidArgumentException;

class BaseShowController extends BaseController{

    public function __construct(BaseService $servicio, string $nameOfResource)
    {
       parent::__construct($servicio,$nameOfResource);
    }

    public function __invoke($id)
    {
       try{
          return $this->responseSuccess($this->getJSONResource( $this->getService()->find($id)));
       } catch( InvalidArgumentException $e){
            return $this->responseException(new BaseJsonResource([]),$e->getMessage());
       }
    }

}
