<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Project;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'project_id',
    ];
    public function Project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}