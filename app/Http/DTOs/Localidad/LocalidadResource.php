<?php
namespace App\Http\DTOs\Localidad;

use App\Http\DTOs\BaseJsonResource;

class LocalidadResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_provincia' => $this->id_provincia,
            'localidad' => $this->localidad,
            'provincia' => $this->provincia
         ];
    }
}
