<?php

namespace App\Repositories;

use App\Models\Project;
use App\Repositories\BaseRepository;

class ProjectRepository extends BaseRepository
{
    public function __construct(Project $Project)
    {
        $this->model = $Project;
    }
    protected $fieldProject = [
        'name',
        'description',
    ];

    public function getFieldData(): array
    {
        return $this->fieldProject;
    }

    public function model(): string
    {
        return Project::class;
    }

}