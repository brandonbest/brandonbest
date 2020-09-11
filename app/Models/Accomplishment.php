<?php

namespace App\Models;

use App\Models\Traits\TraitScopeActive;
use App\Models\Traits\TraitScopeSort;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Accomplishment extends Model
{
    use TraitScopeActive;
    use TraitScopeSort;

    public function scopeSlug(Builder $query, string $slug): Builder
    {
        return $query->where('slug', $slug);
    }
}
