<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use App\Http\Controllers\Controller;
use App\Http\DTOs\BaseJsonResource;
use App\services\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use InvalidArgumentException;

class BaseStore  extends BaseController{

    private FormRequest $request;
    private string $nameOfResource;
    public function __construct(BaseService $service, FormRequest $request, string $resource)
    {
        parent::__construct($service);
        $this->request = $request;
        $this->nameOfResource = $resource;
    }



    public function __invoke()
    {
        try{
            $model = $this->getService()->store($this->getRequest()->validated());
            $namespace = '\\'.$this->nameOfResource;

            return $this->responseSuccess(new $namespace($model),"El registro se guardo con exito");

        }catch(InvalidArgumentException $e){
            return $this->responseException(new BaseJsonResource([]),$e->getMessage());
        }
    }


    public function getRequest(): FormRequest {
        return $this->request;
    }
}
