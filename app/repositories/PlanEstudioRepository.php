<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\PlanEstudio;
use Illuminate\Support\Facades\DB;

class PlanEstudioRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new PlanEstudio());
        $this->relations = [];
        $this->order = 'nombre_plan';
    }

     /**
     * Función que realiza una busqueda de planes de estudio por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
        $this->model =$search != null? $this->model->where('nombre_plan','LIKE',"%$search%")
        ->orWhere('norma_dictamen','LIKE',"%$search%"):$this->model;

    }

    /**
     * Función que Filtra los planes de estudio por la ley de equivalencia
     * @param  ley_equivalencia:string
     * @return void
    */
    public function filterByLeyEquivalencia(string $ley_equivalencia){
        $this->model = $this->model->where('ley_equivalencia','LIKE',"%$ley_equivalencia%");
    }

    /**
     * Función que Filtra los planes de estudio por la norma de dictamen
     * @param  norma_dictamen:int
     * @return void
    */
    public function filterByNormaDictamen(string $norma_dictamen){
        $this->model = $this->model->where('norma_dictamen','LIKE',"%$norma_dictamen%");
    }

     /**
     * Función que Filtra los planes de estudio por la ley de aprobación
     * @param  ley_aprobacion:string
     * @return void
    */
    public function filterByLeyAprobacion(string $ley_aprobacion){
        $this->model = $this->model->where('ley_aprobacion','LIKE',"%$ley_aprobacion%");
    }


}
