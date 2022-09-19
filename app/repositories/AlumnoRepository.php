<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Alumno;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;

class AlumnoRepository extends BasePersonaRepository{

    public function __construct()
    {
        parent::__construct(new Alumno());
        $this->relations = ['persona.localidad','persona.nacionalidad'];
        $this->order = 'persona.nombre';
    }

     /**
     * Función que realiza una busqueda de alumnos por un criterio de busqueda
     * @param  nro_legajo:int
     * @return void
    */
    public function search($search)
    {
        $this->model =$search != null? $this->model->where('legajo','LIKE',"%$search%")
        ->orWhere('libro','LIKE',"%$search%"):$this->model;
        parent::search($search);
    }

    /**
     * Función que Filtra los alumnos por el nro de legajo
     * @param  nro_legajo:int
     * @return void
    */
    public function filterByLegajo($nro_legajo){
        $this->model->where('legajo','LIKE',"%$nro_legajo%");
    }

    /**
     * Función que Filtra los alumnos por el nro de libro
     * @param  nro_libro:int
     * @return void
    */
    public function filterByLibro($nro_libro){
        $this->model->where('libro','LIKE',"%$nro_libro%");
    }

    /**
     * Función que Filtra los alumnos por el nro de folio
     * @param  nro_libro:int
     * @return void
    */

    public function filterByEscuelaOrigen($cue_escuela){
        $this->model->where('cue_esc_origen','LIKE',"%$cue_escuela%");
    }
}
