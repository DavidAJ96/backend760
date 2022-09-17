<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use App\Http\DTOs\BaseJsonResource;
use App\services\BaseService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use InvalidArgumentException;

class BaseDelete extends BaseIndex{
    private string $data;


    public function __construct(BaseService $service,Request $req, string $resource)
    {
        parent::__construct($service,$req);
        $this->data = $resource;
    }

    protected function responseSuccess(BaseJsonResource $resource,string $message= "La consulta se realizo con exito"){
        return response()->json([
           "status"=>true,
           "data"=> $resource,
           "message" => $message
        ],200);
    }


    public function __invoke($id)
    {
        try{
            $model = $this->getService()->delete($id);
            $namespace = '\\'.$this->data;

            return $this->responseSuccess(new $namespace($model));
        } catch(InvalidArgumentException $e){
            return  $this->responseException(new BaseJsonResource([]),$e->getMessage());
        }
    }

}
