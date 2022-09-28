<?php
namespace App\Http\DTOs\Informe;

use App\Http\DTOs\BaseResourceCollection;
use App\Http\DTOs\Informe\InformeResource;

class InformeCollection extends BaseResourceCollection
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
            'data' => InformeResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
