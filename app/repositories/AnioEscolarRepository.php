<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\AnioEscolar;
use Illuminate\Support\Facades\DB;

class AnioEscolarRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new AnioEscolar());
        $this->relations = ['plan_estudio'];
        $this->order = 'anio';
    }

     /**
     * Función que realiza una busqueda de  años escolares por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
        $this->model =$search != null? $this->model->where('anio','LIKE',"%$search%")
        ->orWhereHas('plan_estudio',function($q) use($search){
            $q->where('nombre_plan','LIKE',"%$search%");
        }):$this->model;

    }

    /**
     * Función que Filtra los años escolares por el identificador del plan
     * @param  id_plan:int
     * @return void
    */
    public function filterByIdPlanEstudio(int $id_plan){
        $this->model = $this->model->orWhere('id_plan_estudio','=',$id_plan);
    }



}
