<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\DTOs\Persona\PersonaCollection;
use App\Http\Requests\PersonaRequest;
use App\Models\Persona;
use App\repositories\PersonaRepository;
use App\services\PersonaService;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new PersonaService();
    }



    public function index(Request $request){
        $this->repository->search($request->search);


        return response()->json(new PersonaCollection($this->service->getRepository()->getAll()),200);
    }

    public function store(PersonaRequest $request){
        $this->service->store($request->validated());
        return response()->json([],201);
    }

    public function update(PersonaRequest $request,$id){
        $this->service->update($request->validated(),$id);
        return response()->json([],201);
    }


    public function delete(PersonaRequest $request,$id){
        $this->service->update($request->validated(),$id);
        return response()->json([],201);
    }
}
