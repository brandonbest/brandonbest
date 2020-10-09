<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait TraitScopeSort
{
    public function scopeSort(Builder $q, string $direction = 'ASC'): Builder
    {
        return $q->orderBy('sort', $direction);
    }

    public function scopeSortId(Builder $q, string $idColumn='id', string $direction = 'ASC'): Builder
    {
        return $q->orderBy($idColumn, $direction);
    }
}