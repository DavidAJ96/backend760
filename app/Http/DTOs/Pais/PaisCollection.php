<?php
namespace App\Http\DTOs\Alumno;

use App\Http\DTOs\BaseResourceCollection;
use App\Http\DTOs\Pais\PaisResource;

class AlumnoCollection extends BaseResourceCollection
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
            'data' => PaisResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
