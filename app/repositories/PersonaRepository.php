<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Persona;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class PersonaRepository extends BasePersonaRepository{

    public function __construct()
    {
        parent::__construct(new Persona());
        $this->relations = ['localidad','nacionalidad'];
        $this->order = 'lugar_nacimiento';
    }

    public function search($search)
    {
        $this->model =$search != null? $this->model->where(DB::raw("CONCAT(apellidos,' ',nombre)"),'LIKE',"%$search%")
        ->orWhere('documento','LIKE',"%$search%"): $this->model;
    }

    /**
     * Filtra las personas por la nacionalidad
     * @param  id_nacionalidad:int
     * @return void
    */
    public function filterByNacionalidad($id_nacionalidad){
        $this->model = $id_nacionalidad != null? $this->model->where('id_nacionalidad','=',$id_nacionalidad): $this->model;
    }

    /**
     * Filtra las personas por la localidad
     * @param  id_nacionalidad:int
     * @return void
    */
    public function filterByLocalidad($id_localidad){
        $this->model = $id_localidad != null?$this->model->where('id_localidad','=',$id_localidad): $this->model;
    }

    /**
     * Funcion que filtra las personas por el Genero
     * @param  id_nacionalidad:int
     * @return void
    */
    public function filterByGenero($genero){
        $this->model = $genero != null? $this->model->where('sexo','=',$genero): $this->model;
    }

}
