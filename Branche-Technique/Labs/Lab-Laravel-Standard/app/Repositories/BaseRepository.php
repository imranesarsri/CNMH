<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    // The Eloquent model instance associated with this repository
    protected $model;

    /**
     * Constructor to initialize the repository with a specific Eloquent model.
     *
     * @param Model $model The Eloquent model instance.
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get the field data for the model. This should be implemented by child classes.
     *
     * @return array
     */
    abstract public function getFieldData(): array;

    /**
     * Get the fully qualified class name of the model associated with this repository.
     *
     * @return string
     */
    abstract public function model(): string;

    /**
     * Get a new query builder instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function index()
    {
        return $this->model->query();
    }

    /**
     * Get a new query builder instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function getData()
    {
        return $this->model->query();
    }

    /**
     * Store a newly created resource in the database.
     *
     * @param array $validatedData The validated data to store.
     * @return void
     */
    public function store(array $validatedData)
    {
        $this->model->create($validatedData);
    }

    /**
     * Update the specified resource in the database.
     *
     * @param array $validatedData The validated data to update.
     * @param Model $task The Eloquent model instance to update.
     * @return Model The updated Eloquent model instance.
     */
    public function update(array $validatedData, Model $task): Model
    {
        $task->update($validatedData);
        return $task;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Model $task The Eloquent model instance to delete.
     * @return bool True if deletion is successful, false otherwise.
     */
    public function destroy(Model $task): bool
    {
        return $task->delete();
    }
}