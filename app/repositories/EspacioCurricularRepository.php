<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\AnioEscolar;
use App\Models\EspacioCurricular;
use Illuminate\Support\Facades\DB;

class EspacioCurricularRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new EspacioCurricular());
        $this->relations = ['anio_escolar'];
        $this->order = 'nro_orden';
    }

     /**
     * Función que realiza una busqueda de  años escolares por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
       if(is_string($search)){
            $this->filterByCodMateria($search);
            $this->filterByEspacioCurricular($search);
            $this->filterByNombrePlanEstudio($search);
       }
    }

    /**
     * Función que Filtra los espacios curriculares por el codigo de materia
     * @param  cod_materia:string
     * @return void
    */
    public function filterByCodMateria(string $cod_materia){
        $this->model = $this->model->orWhere('cod_espacio','LIKE',"%$cod_materia%");
    }

    /**
     * Función que Filtra los espacios curriculares por el codigo de materia
     * @param  nombre_plan:string
     * @return void
    */
    public function filterByNombrePlanEstudio(string $nombre_plan){
        $this->model = $this->model->orWhereHas('anio_escolar.plan_estudio',function($q) use($nombre_plan){
            return $q->where('nombre_plan','LIKE',"%$nombre_plan%");
        });
    }

    /**
     * Función que Filtra los espacios curriculares por el nombre
     * @param  cod_materia:string
     * @return void
    */
    public function filterByEspacioCurricular(string $nombre_espacio ){
        $this->model = $this->model->orWhere('espacio_curricular','LIKE',"%$nombre_espacio%");
    }

     /**
     * Función que Filtra los espacios curriculares por el identificador del plan de estudio
     * @param  id_plan:int
     * @return void
    */
    public function filterByIdPlanEstudio(int $id_plan ){
        $this->model = $this->model->orWhereHas('anio_escolar',function($q) use($id_plan){
            return $q->where('id_plan_estudio','=',$id_plan);
        });
    }

    /**
     * Función que Filtra los espacios curriculares por el identificador del año escpñar
     * @param  id_anio_escolar:int
     * @return void
    */
    public function filterByIdAnioEscolar(int $id_anio_escolar ){
        $this->model = $this->model->orWhere('id_anio_escolar','=',$id_anio_escolar);
    }

}
