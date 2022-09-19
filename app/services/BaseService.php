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
    private $nameOfExcelExport = "";
    private string $fileName= "";
    public function __construct($repo)
    {
        $this->repository = $repo;
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
            return Excel::download( new $namespace($data),$this->getFileName().'.xls');
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



    /**
     * Get the value of fileName
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set the value of fileName
     *
     * @return  self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get the value of nameOfExcelExport
     */
    public function getNameOfExcelExport()
    {
        return $this->nameOfExcelExport;
    }

    /**
     * Set the value of nameOfExcelExport
     *
     * @return  self
     */
    public function setNameOfExcelExport($nameOfExcelExport)
    {
        $this->nameOfExcelExport = $nameOfExcelExport;

        return $this;
    }
}
