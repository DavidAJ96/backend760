<?php
namespace App\Http\Controllers\Api\AnioEscolar;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\AnioEscolar\AnioEscolarCollection;
use App\services\AnioEscolarService;
use Illuminate\Http\Request;

class AnioEscolarIndexController extends BaseIndex {
    public function __construct(AnioEscolarService $anioEscolarService, Request $request)
    {
        parent::__construct($anioEscolarService,$request,AnioEscolarCollection::class);
    }


}
