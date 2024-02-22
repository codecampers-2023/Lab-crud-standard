<?php

namespace App\Repository;

use App\Models\Project;

class ProjectRepository
{

    public function create($data)
    {
        return Project::create($data);
    }
}
    