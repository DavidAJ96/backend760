<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use App\Http\DTOs\BaseJsonResource;
use App\services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use InvalidArgumentException;
use Maatwebsite\Excel\Facades\Excel;

class BaseIndex extends BaseController{

    private Request $request;
    private $nameOfExcelExport;
   public function __construct(BaseService $service,Request $request,string $nameOfResource,string $nameOfExcelExport = null)
   {
    parent::__construct($service,$nameOfResource);
    $this->request = $request;
    $this->nameOfExcelExport = $nameOfExcelExport;
   }

   public function __invoke(){
        $this->getService()->setFilter($this->getRequest());
        $this->getService()->setOrder($this->getRequest()->orderby);

        try{
            $data = $this->getCollectionResource($this->getService()->getAll());
            if($this->getRequest()->export='excel'){
                return $this->exportExcel($data);
            }
            return response()->json($data);
        } catch(InvalidArgumentException $e){
            $this->responseException(new BaseJsonResource([]),$e->getMessage());
        }

   }

    protected function exportExcel($data){
        if($this->nameOfExcelExport != null){
            $namespace = '\\'.$this->nameOfExcelExport;
            return Excel::download( new $namespace($data),'archivo.xls');
        }
        throw new InvalidArgumentException("La exportacion a excel no esta definida");
    }



    public function getRequest(): Request {
        return $this->request;
    }
}
