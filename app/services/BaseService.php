<?php
namespace App\services;

use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;

abstract class BaseService {

    protected $repository;

    public function __construct($repo)
    {
        $this->repository = $repo;
    }

    public function getAll(){
        return $this->repository->getAll();
    }

    public function find($id){
        return $this->repository->find($id);
    }


    public function delete($id){
        DB::beginTransaction();

        try {
            $model = $this->repository->delete($id);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('No se pudo eliminar los datos');
        }

        DB::commit();

        return $model;

    }

    public function store(array $data){
        DB::beginTransaction();

        try {
            $model = $this->repository->store($data);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException($e->getMessage());
        }

        DB::commit();

        return $model;

    }


    public function update($data,$id){
        DB::beginTransaction();

        try {
            $model = $this->repository->update($data,$id);

        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('No se pudo actualizar los datos');
        }

        DB::commit();

        return $model;

    }

    public abstract function setFilter(Request $filters);

    public function getRepository(){
        return $this->repository;
    }


}
