<?php
namespace App\repositories;

use App\repositories\interfaces\IRepository;
use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements IRepository {
    protected $model;
    protected $relations = [];
    protected $order = '';
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function withRelations(){
       $this->model = $this->model->with($this->relations);
    }

    public function getAll(){
        $this->withRelations();
        return $this->orderCollection($this->model->get());
    }

    public function find($id){
        $this->withRelations();
        return $this->model->findOrFail($id);
    }


    public function store($data){
        $this->model->fill($data)->save();
        return $this->model;
    }
    public function update($data,$id){
        $model = $this->model->findOrFail($id)->fill($data);
        $model->save();
        return $model;
    }
    public function delete($id){
       $model = $this->model->findOrFail($id);

       $model->delete();
       return $model;
    }
    public abstract function search($search);

    public function orderCollection($data){

        return $data->sortBy(function($query){

            if(empty($this->order)){
                return $query;
            }
            $keys = explode('.',$this->order);
            foreach($keys as $key){
                $query = $query[$key];

            }

            return $query;
        });
    }

    public function setOrder(string $order){
        $this->order = $order;
    }

}
