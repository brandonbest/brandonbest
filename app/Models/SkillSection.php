<?php

namespace App\Models;

use App\Models\Traits\TraitScopeSort;
use Illuminate\Database\Eloquent\Model;

class SkillSection extends Model
{
    use TraitScopeSort;

    public function categories()
    {
        return $this->hasMany(SkillCategory::class)->sort();
    }
}
