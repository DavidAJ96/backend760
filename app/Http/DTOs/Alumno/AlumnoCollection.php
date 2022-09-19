<?php
namespace App\Http\DTOs\Alumno;

use App\Http\DTOs\BaseResourceCollection;

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
            'data' => AlumnoResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
