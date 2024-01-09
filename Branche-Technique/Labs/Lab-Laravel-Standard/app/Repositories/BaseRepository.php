<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model->query();
    }

    public function getData()
    {
        return $this->model->query();
    }


    public function store(array $validatedData)
    {
        $this->model->create($validatedData);
    }

    public function update(array $validatedData, Model $task): Model
    {
        $task->update($validatedData);
        return $task;
    }

    public function destroy(Model $task): bool
    {
        return $task->delete();
    }
}
