<?php
namespace App\repositories;

use App\repositories\interfaces\IRepository;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements IRepository {
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
        return $this->setOrder($this->model->get());
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
    public function delete($id){}
    public function search($search){

    }

    public function setOrder($data){
        return $data->sortBy(function($query){

            if(empty($this->oder)){
                return $query;
            }
            $keys = explode('.',$this->order);
            foreach($keys as $key){
                $query = $query[$key];
            }

            return $query;
        });
    }



}
