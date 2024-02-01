<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository {
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;   
    }

    // Get all data 
    public function getAll() {
        return $this->model->paginate(4);
    }

    // Insert data into the database
    public function store(array $data) {
        return $this->model->create($data);
    }

    // Find data by ID
    public function find($id) {
        return $this->model->findOrFail($id);
    }

    // Update data
    public function update(array $data, $id) {
        $findData = $this->model->find($id);
        if (!$findData) {
            return false;
        }

        return $findData->update($data);
    }
    
    // Delete data by ID
    public function delete($id) {
        $findData = $this->model->find($id);
        if ($findData) {
            $findData->delete();
            return true;
        }
        return false;
    }
}