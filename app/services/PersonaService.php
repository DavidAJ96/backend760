<?php
namespace App\services;

use App\Http\Requests\PersonaRequest;
use App\repositories\PersonaRepository;

class PersonaService extends BaseService{
    public function __construct()
    {
        parent::__construct(new PersonaRepository());
    }



}
