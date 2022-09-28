<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Informe;

class InformeRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new Informe());
        $this->relations = ['escuela'];
        $this->order = 'nombre';
    }

     /**
     * Función que realiza una busqueda de  años escolares por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
         if(is_string($search)){
            $this->filterByNombreInforme($search);
         }
    }

    /**
     * Función que Filtra los cargos por el nombre del mismo
     * @param  nombre_cargo:string
     * @return void
    */
    public function filterByNombreInforme(string $nombre_informe){
        $this->model = $this->model->orWhere('nombre','LIKE',"%$nombre_informe%");
    }

    /**
     * Función que Filtra los informes por leyenda
     * @param  estado_cargo:string
     * @return void
    */
    public function filterByLeyenda(string $leyenda){
        $this->model = $this->model->orWhere('estado','LIKE',"%$leyenda%");
    }


}
