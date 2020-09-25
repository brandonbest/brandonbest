<?php

namespace App\Models;

use App\Models\Traits\TraitScopeSort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SkillCategory extends Model
{
    use TraitScopeSort;

    public function section(): BelongsTo
    {
        return $this->belongsTo(SkillSection::class, 'skill_section_id');
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'skill_categories_pivot');
    }
}
