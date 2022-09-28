<?php
namespace App\Http\DTOs\AnioEscolar;

use App\Http\DTOs\BaseResourceCollection;


class AnioEscolarCollection extends BaseResourceCollection
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
            'data' => AnioEscolarResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
