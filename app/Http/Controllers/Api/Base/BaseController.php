<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use App\Http\Controllers\Controller;
use App\Http\DTOs\BaseJsonResource;
use App\Http\DTOs\BaseResourceCollection;
use App\services\BaseService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BaseController extends Controller{
   private BaseService $service;
   private string $nameOfResource;

   public function __construct(BaseService $service, string $nameOfResource)
   {
    $this->service = $service;
    $this->nameOfResource = $nameOfResource;
   }

   protected function responseSuccess(BaseJsonResource $resource,string $message= "La consulta se realizo con exito"){
    return response()->json([
       "status"=>true,
       "data"=> $resource,
       "message" => $message
    ],200);
   }


   protected function responseException(BaseJsonResource $resource, string $message){
    return response()->json([
       "status"=>false,
       "data"=> $resource,
       "message" => $message
    ],422);
   }

   public function getJSONResource($model){
     $namespace = '\\'.$this->nameOfResource;
     return new $namespace($model);
   }


   public function getCollectionResource($model){
    $namespace = '\\'.$this->nameOfResource;
    return new $namespace($model);
   }


    public function getService(): BaseService{
        return $this->service;
    }

}
