<?php

namespace App\Http\DTOs;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Log;

class BaseResourceCollection extends ResourceCollection
{
    public function __construct($resource) {
        parent::__construct($resource);
    }


    public function toArrayWithPagination(array $array)
    {
        $perPage = request("per_page") ?? 20;
        $currentPage = request("page") ?? 1;
        error_log(count($array));
        return new LengthAwarePaginator(array_values($array), count($array), $perPage, $currentPage);
    }
}
