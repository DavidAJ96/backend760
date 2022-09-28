<?php
namespace App\Http\Controllers\Api\Informe;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\Informe\InformeCollection;
use App\services\InformeService;
use Illuminate\Http\Request;

class InformeIndexController extends BaseIndex {
    public function __construct(InformeService $InformeService, Request $request)
    {
        parent::__construct($InformeService,$request,InformeCollection::class);
    }


}
