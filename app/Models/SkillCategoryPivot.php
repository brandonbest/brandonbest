<?php

namespace App\Models;

use App\Models\Traits\TraitScopeSort;
use Illuminate\Database\Eloquent\Model;

class SkillCategoryPivot extends Model
{
    use TraitScopeSort;

    protected $table = 'skill_categories_pivot';
}