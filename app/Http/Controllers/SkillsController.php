<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Http\Resources\SkillSectionResource;
use App\Models\Skill;
use App\Models\SkillSection;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function all()
    {
    }

    public function categories()
    {
    }

    public function section(SkillSection $section)
    {
        return new SkillSectionResource($section);
    }

    public function sections()
    {
        $sections = SkillSection::sort()->with('categories.skills.lineItems')->get();
        return SkillSectionResource::collection($sections);
    }
}
