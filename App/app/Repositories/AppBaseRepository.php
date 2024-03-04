<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AppBaseRepository {
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function paginatedData($perpage){
        return $this->model->paginate($perpage);
    }
    public function update($validatedData){
        $this->model->update($validatedData);
    }
    public function store(array $validatedData){
        return $this->model->create($validatedData);
    }
    public function destroy($id){
        $toDelete = $this->model->find($id);
        if ($toDelete) {
            return $toDelete->delete();
        }
        return false; // Or throw an exception if you prefer
    }
    
    
}