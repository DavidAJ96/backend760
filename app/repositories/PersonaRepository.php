<?php
namespace App\repositories;

use App\Models\Persona;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class PersonaRepository extends BaseRepository{

    public function __construct()
    {
        parent::__construct(new Persona());
        $this->relations = ['localidad'];
        $this->order = 'localidad.localidad';
    }

    public function search($search)
    {
        $this->model = $this->model->where(DB::raw("CONCAT(apellidos,' ',nombre)"),'LIKE',"%$search%")
        ->orWhere('documento','LIKE',"%$search%");


    }
}
