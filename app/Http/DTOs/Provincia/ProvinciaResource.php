<?php
namespace App\Http\DTOs\Provincia;

use App\Http\DTOs\BaseJsonResource;

class ProvinciaResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'provincia' => $this->provincia,
         ];
    }
}
