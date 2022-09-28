<?php
declare(strict_types = 1);
namespace App\repositories;

use App\Models\Agente;

class AgenteRepository extends BasePersonaRepository{

    public function __construct()
    {
        parent::__construct(new Agente());
        $this->relations = ['persona.localidad','persona.nacionalidad'];
        $this->order = 'persona.apellidos';
    }


    /**
     * Función que Filtra los agentes por escuela
     * @param  cue_escuela:int
     * @return void
    */

    public function filterByEscuela($cue_escuela){
        $this->model->where('cue_escuela','LIKE',"%$cue_escuela%");
    }
}
