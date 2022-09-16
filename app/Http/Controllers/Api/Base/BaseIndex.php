<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use App\Http\Controllers\Controller;
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



    public function getService(): BaseService{
        return $this->service;
    }

    public function getRequest(): Request {
        return $this->request;
    }
}
