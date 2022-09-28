<?php
namespace App\Http\DTOs\CicloLectivo;

use App\Http\DTOs\BaseResourceCollection;

class CicloLectivoCollection extends BaseResourceCollection
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
            'data' => CicloLectivoResource::collection($this->collection),
        ];

        return $this->toArrayWithPagination($data);
    }
}
