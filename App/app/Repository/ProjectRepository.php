<?php

namespace App\Repository;

use App\Models\Project;
use PHPUnit\Framework\Constraint\Count;

use function PHPUnit\Framework\returnValue;

class ProjectRepository
{

    public function create($data)
    {
        return Project::create($data);
    }

    public function count() {
        
        $totalrows = Project::all();
        $totalprojecs = count($totalrows);
        return $totalprojecs;
        
    }

}
    