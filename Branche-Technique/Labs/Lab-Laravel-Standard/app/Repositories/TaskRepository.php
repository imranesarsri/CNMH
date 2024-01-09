<?php

namespace App\Repositories;

use App\Models\Task;
use App\Repositories\BaseRepository;
use App\Http\Requests\FormTaskRequest;

class TaskRepository extends BaseRepository
{

    public function __construct(Task $model)
    {
        $this->model = $model;
    }


}