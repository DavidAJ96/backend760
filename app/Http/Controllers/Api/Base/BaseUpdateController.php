<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use App\Http\Controllers\Controller;
use App\Http\DTOs\BaseJsonResource;
use App\services\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use InvalidArgumentException;

class BaseUpdateController  extends BaseController{

    private FormRequest $request;


    public function __construct(BaseService $service, FormRequest $request,string $resource)
    {
        parent::__construct($service,$resource);
        $this->request = $request;
     }



    public function __invoke($id)
    {
        try{
            $model = $this->getService()->update($this->getRequest()->validated(),$id);

            return $this->responseSuccess($this->getJSONResource($model),"El registro se inserto correctamente");

        }catch(InvalidArgumentException $e){
            return $this->responseException(new BaseJsonResource([]),$e->getMessage() );

        }
    }


    public function getRequest(): FormRequest {
        return $this->request;
    }
}
