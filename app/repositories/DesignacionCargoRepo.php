<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Cargo;
use App\Models\DesignacionCargo;
use Illuminate\Support\Facades\DB;

class DesignacionCargoRepo extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new DesignacionCargo());
        $this->order = 'fecha_alta';
        $this->relations = ['agente.persona','cargo'];
    }

     /**
     * Función que realiza una busqueda de  años escolares por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
         if(is_string($search)){
            $this->filterByNombreCargo($search);
            $this->filterByDocumentoAgente($search);
            $this->filterByNombreAgente($search);
            $this->filterByEstado($search);

        }
    }

    /**
     * Función que Filtra las designaciones por el nombre del cargo
     * @param  nombre_cargo:string
     * @return void
    */
    public function filterByNombreCargo(string $nombre_cargo){
        $this->model = $this->model->orWhereHas('cargo',function($q) use($nombre_cargo){
            $q->where('nombre_cargo','LIKE',"%$nombre_cargo%");
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
     * @param  idCargo:int
     * @return void
    */
    public function filterByIdCargo(int $idCargo){
        $this->model = $this->model->orWhere('estado','=',$idCargo);
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
     * @param  estado_cargo:string
     * @return void
    */
    public function filterByEstado(string $estado_cargo){
        $this->model = $this->model->where('estado','LIKE',"%$estado_cargo%");
    }


}
