<?php
namespace App\repositories\interfaces;

interface IRepository
{
    public function getAll();
    public function search($search);
    public function store($data);
    public function update($data,$model);
    public function delete($id);
}
