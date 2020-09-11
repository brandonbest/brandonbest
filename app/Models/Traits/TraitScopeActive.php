<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait TraitScopeActive
{
    public function scopeActive(Builder $q, $active=true): Builder
    {
        return $q->where('active', $active);
    }
}