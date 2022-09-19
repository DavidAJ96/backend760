<?php
namespace App\services;

use Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use InvalidArgumentException;
use Maatwebsite\Excel\Facades\Excel;

abstract class BaseService {

    protected $repository;
    private $nameOfExcelExport;
    public function __construct($repo,string $nameOfExcelExport = null)
    {
        $this->repository = $repo;
        $this->nameOfExcelExport = $nameOfExcelExport;
    }

    public function getAll(){
        return $this->repository->getAll();
    }

    public function getOrder(){
        return $this->getRepository()->getOrder();
    }


    public function find($id){
       try{
         return $this->repository->find($id);
       } catch(Exception $e){
          Log::info($e->getMessage());
          throw new InvalidArgumentException("No se encontro el registro");
       }
    }

    public function exportExcel($data){
        if($this->nameOfExcelExport != null){
            $namespace = '\\'.$this->nameOfExcelExport;
            return Excel::download( new $namespace($data),'archivo.xls');
        }
        throw new InvalidArgumentException("La exportacion a excel no esta definida");
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

    public function setOrder($order){
          if($order != null){
            $this->getRepository()->setOrder($order);
        }
    }


}
