<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Cargo;
use App\Models\DesignacionCargo;
use App\Models\DesignacionDocente;
use Illuminate\Support\Facades\DB;

class DesignacionDocenteRepo extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new DesignacionDocente());
        $this->order = 'fecha_alta';
        $this->relations = ['agente.persona','espacio_curricular','curso.anio_escolar.plan_estudio','situacion_revista'];
    }

     /**
     * Función que realiza una busqueda de  años escolares por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
         if(is_string($search)){
            $this->filterByNombreEspacio($search);
            $this->filterByDocumentoAgente($search);
            $this->filterByNombreAgente($search);
            $this->filterByEstado($search);

        }
    }

    /**
     * Función que Filtra las designaciones por el nombre del espacio
     * @param  nombre_cargo:string
     * @return void
    */
    public function filterByNombreEspacio(string $nombre_espacio){
        $this->model = $this->model->orWhereHas('espacio_curricular',function($q) use($nombre_espacio){
            $q->where('espacio_curricular','LIKE',"%$nombre_espacio%");
        });
    }

    /**
     * Función que Filtra las designaciones por el nombre del agente
     * @param  nombre_persona:string
     * @return void
    */
    public function filterByNombreAgente(string $nombre_persona){
        $this->model = $this->model->orWhereHas('agente.persona',function($q) use($nombre_persona){
            $q->where(DB::raw("CONCAT(apellidos,' ',nombre)"),'LIKE',"%$nombre_persona%");
        });
    }

   /**
     * Función que Filtra las designaciones por el documento de la persona
     * @param  documento_agente:string
     * @return void
    */
    public function filterByDocumentoAgente(string $documento_agente){
        $this->model = $this->model->orWhereHas('agente.persona',function($q) use($documento_agente){
            $q->where('documento','LIKE',"%$documento_agente%");
        });
    }


    /**
     * Función que Filtra las designaciones por el identificador del cargo
     * @param  idEspacio:int
     * @return void
    */
    public function filterByIdEspacioCurricular(int $idEspacio){
        $this->model = $this->model->orWhere('id_espacio_curricular','=',$idEspacio);
    }

    /**
     * Función que Filtra las designaciones por el identificador del cargo
     * @param  idCurso:int
     * @return void
    */
    public function filterByIdCurso(int $idCurso){
        $this->model = $this->model->orWhere('id_curso','=',$idCurso);
    }


    /**
     * Función que Filtra las designaciones por el identificador del agente
     * @param  idAgente:int
     * @return void
    */
    public function filterByIdAgente(int $idAgente){
        $this->model = $this->model->where('id_agente','=',$idAgente);
    }



    /**
     * Función que Filtra las designaciones por el estado de la misma
     * @param  estado_designacion_espacio:string
     * @return void
    */
    public function filterByEstado(string $estado_designacion_espacio){
        $this->model = $this->model->where('estado','LIKE',"%$estado_designacion_espacio%");
    }


}
