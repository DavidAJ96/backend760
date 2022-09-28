<?php
namespace App\Http\DTOs\Localidad;

use App\Http\DTOs\BaseResourceCollection;

class LocalidadCollection extends BaseResourceCollection
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
            'data' => LocalidadResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
