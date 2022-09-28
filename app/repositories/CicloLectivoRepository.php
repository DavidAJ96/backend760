<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\CicloLectivo;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;

class CicloLectivoRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new CicloLectivo());
        $this->relations = ['escuela'];
        $this->order = 'nombre_ciclo';
    }

     /**
     * Función que realiza una busqueda de  años escolares por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
       if(!is_null($search)){
         $this->filterByCueEscuela($search);
         $this->filterByNombreCiclo($search);
       }
    }

    /**
     * Función que Filtra los ciclos lectivos por el nombre
     * @param  nombre_ciclo:string
     * @return void
    */
    public function filterByNombreCiclo(string $nombre_ciclo){
        $this->model = $this->model->orWhere('nombre_ciclo','LIKE',"%$nombre_ciclo%");
    }

      /**
     * Función que Filtra los ciclos lectivos por cue de la escuela
     * @param  cue_escuela:string
     * @return void
    */
    public function filterByCueEscuela(string $cue_escuela){
        $this->model = $this->model->orWhere('cue_escuela','LIKE',"%$cue_escuela%");
    }

}
