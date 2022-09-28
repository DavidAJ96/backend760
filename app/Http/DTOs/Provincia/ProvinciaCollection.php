<?php
namespace App\Http\DTOs\Provincia;

use App\Http\DTOs\BaseResourceCollection;

class ProvinciaCollection extends BaseResourceCollection
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
            'data' => ProvinciaResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
