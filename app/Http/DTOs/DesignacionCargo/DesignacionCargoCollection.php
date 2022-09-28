<?php
namespace App\Http\DTOs\DesignacionCargo;

use App\Http\DTOs\BaseResourceCollection;
use App\Http\DTOs\Cargo\CargoResource;

class DesignacionCargoCollection extends BaseResourceCollection
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
            'data' => DesignacionCargoResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
