<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\BaseRepository;

class TaskRepository extends BaseRepository
{

    public function __construct(Task $model)
    {
        $this->model = $model;
    }

    protected $fieldTask = [
        'nom',
        'description',
        'project_id',
    ];

    public function getFieldData(): array
    {
        return $this->fieldTask;
    }

    public function model(): string
    {
        return Task::class;
    }
}
