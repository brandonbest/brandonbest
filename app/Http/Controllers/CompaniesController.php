<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Http\Resources\ProjectResource;
use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function all()
    {
        $companies = Company::active()->sort()->get();
        return CompanyResource::collection($companies);
    }

    public function single(string $slug)
    {
        $company = Company::where('slug', $slug)->take(1)->first();
        return new CompanyResource($company);
    }

    public function projects()
    {
        $projects = Project::active()->sort()->get();
        return ProjectResource::collection($projects);
    }

    public function project(Project $project)
    {
        return new ProjectResource($project);
    }
}
