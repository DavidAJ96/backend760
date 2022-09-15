<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\DTOs\Persona\PersonaCollection;
use App\Http\Requests\PersonaRequest;
use App\Models\Persona;
use App\services\PersonaService;
use Exception;
use Facade\FlareClient\Http\Response;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use InvalidArgumentException;

class PersonaController extends Controller
{
    protected PersonaService $service;

    public function __construct()
    {
        $this->service = new PersonaService();
    }



    public function index(Request $request){
        $this->service->getRepository()->search($request->search);
        try{
            return response()->json(new PersonaCollection($this->service->getRepository()->getAll()),200);
        } catch(QueryException $e){
            return response()->json([
                "status"=>false,
                "data" =>[],
                "message"=>"La consulta no se pudo procesar"
            ],200);
        }




    }

    public function store(PersonaRequest $request){
        try{
             $model = $this->service->store($request->validated());
            return response()->json($model,201);
        }catch(InvalidArgumentException $e){
            return response()->json([
                "status"=>false,
                "data" =>$request->validated(),
                "message"=>$e->getMessage()
            ],200);
        }

    }

    public function update( Request $request,int $id){
        $this->service->update($request->validated(),$id);
        return response()->json([],201);
    }


    public function delete(PersonaRequest $request,int $id){
        $this->service->update($request->validated(),$id);
        return response()->json([],201);
    }
}
