<?php

namespace App\Http\DTOs;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Log;

class BaseResourceCollection extends ResourceCollection
{
    public function __construct($resource) {
        parent::__construct($resource);
    }

    public function pagination(Collection $data)
    {
        $page = request('page') ?: (Paginator::resolveCurrentPage() ?: 1);
        $perPage = is_null(request('per_page')) ?15:request('per_page');
        $items = $data->forPage($page, $perPage);
        $totalResults = $data->count();


        return new LengthAwarePaginator(
            $items,
            $totalResults,
            $perPage,
            $page,
            // Esta parte (options) la copie de lo que hace por defecto el paginador de Laravel haciendo un dd()
            [
                'path' => url()->current(),
                'pageName' => 'page',
            ]
        );
    }

    public function toArrayWithPagination(array $array)
    {
         return $this->pagination(new Collection($array['data']));
    }
}
