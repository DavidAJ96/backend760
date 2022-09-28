<?php
namespace App\Http\DTOs\DesignacionDocente;

use App\Http\DTOs\BaseResourceCollection;
use App\Http\DTOs\DesignacionDocente\DesignacionDocenteResource;

class DesignacionDocenteCollection extends BaseResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'data' => DesignacionDocenteResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
