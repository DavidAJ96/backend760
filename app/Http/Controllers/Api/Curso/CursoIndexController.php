<?php
namespace App\Http\Controllers\Api\Curso;

use App\Http\Controllers\Api\Base\BaseIndex;
use App\Http\DTOs\Curso\CursoCollection;
use App\services\CursoService;
use Illuminate\Http\Request;

class CursoIndexController extends BaseIndex {
    public function __construct(CursoService $cursoService, Request $request)
    {
        parent::__construct($cursoService,$request,CursoCollection::class);
    }


}
