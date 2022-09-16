<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use App\Http\Controllers\Controller;
use App\services\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use InvalidArgumentException;

class BaseStore  extends Controller{
    private BaseService $service;
    private FormRequest $request;

    public function __construct(BaseService $service, FormRequest $request)
    {
        $this->service = $service;
        $this->request = $request;
    }



    public function __invoke()
    {
        try{
            $model = $this->getService()->store($this->getRequest()->validated());
            return response()->json([
                "status"=> true,
                "data"=> $model,
                "message" => "El registro se inserto correctamente"
            ]
            );
        }catch(InvalidArgumentException $e){
            return response()->json(
                [
                    "status"=>false,
                    "message"=> $e->getMessage(),
                    "data"=>$this->getRequest()->validated()
                ],422
                );
        }
    }

    public function getService(): BaseService{
        return $this->service;
    }

    public function getRequest(): FormRequest {
        return $this->request;
    }
}
