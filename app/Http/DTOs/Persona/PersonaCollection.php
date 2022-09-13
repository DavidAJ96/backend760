<?php
namespace App\Http\DTOs\Persona;

use App\Http\DTOs\BaseResourceCollection;

class PersonaCollection extends BaseResourceCollection
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
            'data' => PersonaResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
