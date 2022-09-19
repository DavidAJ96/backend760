<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Alumno;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BasePersonaRepository extends BaseRepository{
    protected $has ="persona";
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    public function search($search)
    {
        $this->model =$search != null? $this->model->orWhereHas($this->has, function($q) use($search){
            $q->where(DB::raw("CONCAT(apellidos,' ',nombre)"),'LIKE',"%$search%")
            ->orWhere('documento','LIKE',"%$search%");
        }):$this->model;

    }

    /**
     * Filtra las personas por la nacionalidad
     * @param  id_nacionalidad:int
     * @return void
    */
    public function filterByNacionalidad($id_nacionalidad){
        $this->model =$id_nacionalidad != null? $this->model->whereHas($this->has, function($q) use($id_nacionalidad){
            $q->where('id_nacionalidad','=',$id_nacionalidad);
        }):$this->model;
    }

    /**
     * Filtra las personas por la localidad
     * @param  id_nacionalidad:int
     * @return void
    */
    public function filterByLocalidad($id_localidad){
        $this->model =$id_localidad != null? $this->model->whereHas($this->has, function($q) use($id_localidad){
            $q->where('id_localidad','=',$id_localidad);
        }):$this->model;
    }

    /**
     * Funcion que filtra las personas por el Genero
     * @param  id_nacionalidad:int
     * @return void
    */
    public function filterByGenero($genero){
        $this->model =$genero != null? $this->model->whereHas($this->has, function($q) use($genero){
            $q->where('sexo','=',$genero);
    }):$this->model;    }

}
