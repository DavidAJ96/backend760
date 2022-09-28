<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Cargo;

class CargoRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new Cargo());
        $this->order = 'nombre_cargo';
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
         }
    }

    /**
     * Función que Filtra los cargos por el nombre del mismo
     * @param  nombre_cargo:string
     * @return void
    */
    public function filterByNombreCargo(string $nombre_cargo){
        $this->model = $this->model->where('nombre_cargo','LIKE',"%$nombre_cargo%");
    }

    /**
     * Función que Filtra los cargos por el estado del mismo
     * @param  estado_cargo:string
     * @return void
    */
    public function filterByEstado(string $estado_cargo){
        $this->model = $this->model->where('estado','LIKE',"%$estado_cargo%");
    }


}
