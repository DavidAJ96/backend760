<?php
namespace App\Http\DTOs\EspacioCurricular;

use App\Http\DTOs\BaseResourceCollection;


class EspacioCurricularCollection extends BaseResourceCollection
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
            'data' => EspacioCurricularResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
