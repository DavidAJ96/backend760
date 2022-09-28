<?php
namespace App\Http\DTOs\Agente;

use App\Http\DTOs\BaseResourceCollection;

class AgenteCollection extends BaseResourceCollection
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
            'data' => AgenteResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
