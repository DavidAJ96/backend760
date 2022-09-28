<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Curso;
use Illuminate\Support\Facades\DB;

class CursoRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new Curso());
        $this->relations = ['designacion_tutor.agente.persona','designacion_preceptor.agente.persona','anio_escolar.plan_estudio'];
        $this->order = 'anio';
    }

     /**
     * Función que realiza una busqueda de  años escolares por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
       if(!is_null($search)){
         $this->filterByAnioAndDivision($search);
         $this->filterByNombrePlan($search);
         $this->filterByNombrePreceptor($search);
         $this->filterByNombreTutor($search);
         $this->filterByDocumentoPreceptor($search);
         $this->filterByDocumentoTutor($search);
       }
    }

    /**
     * Función que Filtra los cursos por año y division
     * @param  id_plan:int
     * @return void
    */
    public function filterByAnioAndDivision(string $anio_division){
        $this->model = $this->model->orWhereHas('anio_escolar',function($q) use($anio_division){
            return $q->where(DB::raw("CONCAT(anio,' ',curso.division)"),'LIKE',"%$anio_division%");
        });
    }

   /**
     * Función que Filtra los cursos por nombre del plan
     * @param  nombre_plan:string
     * @return void
    */
    public function filterByNombrePlan(string $nombre_plan){
        $this->model = $this->model->orWhereHas('anio_escolar.plan_estudio',function($q) use($nombre_plan){
            return $q->where('nombre_plan','LIKE',"%$nombre_plan%");
        });
    }

    /**
     * Función que Filtra los cursos por identificador del plan de estudios
     * @param  id_plan:int
     * @return void
    */
    public function filterByIdPlan(int $id_plan){
        $this->model = $this->model->orWhereHas('anio_escolar',function($q) use($id_plan){
            return $q->where('id_plan_estudio','LIKE',"%$id_plan%");
        });
    }

     /**
     * Función que Filtra las designaciones por el nombre del agente
     * @param  nombre_persona:string
     * @return void
    */
    public function filterByNombreTutor(string $nombre_persona){
        $this->model = $this->model->orWhereHas('designacion_tutor.agente.persona',function($q) use($nombre_persona){
           return  $q->where(DB::raw("CONCAT(apellidos,' ',nombre)"),'LIKE',"%$nombre_persona%");
        });
    }

     /**
     * Función que Filtra las designaciones por el nombre del agente
     * @param  nombre_persona:string
     * @return void
    */
    public function filterByNombrePreceptor(string $nombre_persona){
        $this->model = $this->model->orWhereHas('designacion_preceptor.agente.persona',function($q) use($nombre_persona){
            return $q->where(DB::raw("CONCAT(apellidos,' ',nombre)"),'LIKE',"%$nombre_persona%");
        });
    }

   /**
     * Función que Filtra los cursos por el documento del agente
     * @param  documento_agente:string
     * @return void
    */
    public function filterByDocumentoPreceptor(string $documento_agente){
        $this->model = $this->model->orWhereHas('designacion_preceptor.agente.persona',function($q) use($documento_agente){
            return $q->where('documento','LIKE',"%$documento_agente%");
        });
    }

    /**
     * Función que Filtra los cursos por el documento del agente
     * @param  documento_agente:string
     * @return void
    */
    public function filterByDocumentoTutor(string $documento_agente){
        $this->model = $this->model->orWhereHas('designacion_tutor.agente.persona',function($q) use($documento_agente){
            return $q->where('documento','LIKE',"%$documento_agente%");
        });
    }



}
