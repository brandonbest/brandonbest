<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function all()
    {
        $projects = Project::active()->sort()->get();
        return ProjectResource::collection($projects);
    }

    public function project(Project $project)
    {
        return new ProjectResource($project);
    }
}
