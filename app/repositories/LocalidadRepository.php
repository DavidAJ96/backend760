<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Localidad;
use Illuminate\Support\Facades\DB;

class LocalidadRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new Localidad());
        $this->relations = ['provincia'];
        $this->order = 'localidad';
    }

     /**
     * Función que realiza una busqueda de  localidades por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
        if(!is_null($search)){
            $this->filterByNombreLocalidad($search);
            $this->filterByNombreProvincia($search);
        }
    }

    /**
     * Función que Filtra las localidades por nombre
     * @param  nombre_localidad:string
     * @return void
    */
    public function filterByNombreLocalidad(string $nombre_localidad){
        $this->model = $this->model->where('localidad','LIKE',"%$nombre_localidad%");
    }

    /**
     * Función que Filtra las localidades por el nombre de la provincia
     * @param  nombre_provincia:string
     * @return void
    */
    public function filterByNombreProvincia(string $nombre_provincia){
        $this->model = $this->model->orWhereHas('provincia',function($q) use($nombre_provincia){
            $q->where('provincia','LIKE',"%$nombre_provincia%");
        });
    }



    /**
     * Función que Filtra las localidades por el identificador de la provincia
     * @param  id_provincia:int
     * @return void
    */
    public function filterByIdProvincia(int $id_provincia){
        $this->model = $this->model->orWhere('id_provincia','=',$id_provincia);
    }



}
