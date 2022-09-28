<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Provincia;

use Illuminate\Support\Facades\DB;

class ProvinciaRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new Provincia());
        $this->order = 'provincia';
    }

     /**
     * Función que realiza una busqueda de  Provincias por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
        if(!is_null($search)){
            $this->filterByNombreProvincia($search);
         }
    }

    /**
     * Función que Filtra las Provinciaes por nombre
     * @param  nombre_Provincia:string
     * @return void
    */
    public function filterByNombreProvincia(string $nombre_Provincia){
        $this->model = $this->model->where('provincia','LIKE',"%$nombre_Provincia%");
    }





}
