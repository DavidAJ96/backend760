<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use App\Http\DTOs\BaseJsonResource;
use App\services\BaseService;
use Illuminate\Http\Request;
use InvalidArgumentException;

class BaseDelete extends BaseController{


    public function __construct(BaseService $service, string $nameOfResource)
    {
        parent::__construct($service,$nameOfResource);

    }



    public function __invoke($id)
    {
        try{
            $model = $this->getService()->delete($id);
            return $this->responseSuccess($this->getJSONResource($model));
        } catch(InvalidArgumentException $e){
            return  $this->responseException(new BaseJsonResource([]),$e->getMessage());
        }
    }

}
