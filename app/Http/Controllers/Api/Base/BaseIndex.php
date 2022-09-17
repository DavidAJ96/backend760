<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use App\Http\Controllers\Controller;
use App\Http\DTOs\BaseJsonResource;
use App\services\BaseService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BaseIndex extends Controller{
   private BaseService $service;
   private Request $request;

   public function __construct(BaseService $service,Request $request)
   {
    $this->service = $service;
    $this->request = $request;
   }

   protected function responseSuccess(BaseJsonResource $resource){
     return response()->json([
        "status"=>true,
        "data"=> $resource
     ],200);
   }

    public function getService(): BaseService{
        return $this->service;
    }

    public function getRequest(): Request {
        return $this->request;
    }
}
