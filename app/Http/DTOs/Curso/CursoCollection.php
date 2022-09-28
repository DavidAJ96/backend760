<?php
namespace App\Http\DTOs\Curso;

use App\Http\DTOs\BaseResourceCollection;
use App\Http\DTOs\Cargo\CargoCollection;
use App\Http\DTOs\Cargo\CargoResource;

class CursoCollection extends BaseResourceCollection
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
            'data' => CursoResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
