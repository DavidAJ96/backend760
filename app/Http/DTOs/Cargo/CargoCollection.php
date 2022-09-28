<?php
namespace App\Http\DTOs\Cargo;

use App\Http\DTOs\BaseResourceCollection;
use App\Http\DTOs\Cargo\CargoResource;

class CargoCollection extends BaseResourceCollection
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
            'data' => CargoResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
