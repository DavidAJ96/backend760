<?php
namespace App\Http\DTOs\PlanEstudio;

use App\Http\DTOs\BaseResourceCollection;

class PlanEstudioCollection extends BaseResourceCollection
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
            'data' => PlanEstudioResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
