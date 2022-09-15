<?php
declare(strict_types=1);
namespace App\Http\Controllers\Api\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class BaseStore {
    private Model $model;
    private FormRequest $request;

    public function __construct(Model $model, FormRequest $request)
    {
        $this->model = $model;
        $this->request = $request;
    }

    public function store(){

    }

    public function getModel(): Model{
        return $this->model;
    }

    public function getRequest(): FormRequest {
        return $this->request;
    }
}
