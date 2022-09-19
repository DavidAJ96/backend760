<?php
namespace App\Http\DTOs\Pais;

use App\Http\DTOs\BaseJsonResource;

class PaisResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nacionalidad' => $this->nacionalidad,
            'pais' => $this->pais,

        ];
    }
}
