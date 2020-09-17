<?php

namespace App\Models;

use App\Models\Traits\TraitScopeActive;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    use TraitScopeActive;

    protected $table = 'legal';

    public function scopeSlug(Builder $builder, string $slug): Builder
    {
        return $builder->where('slug', $slug);
    }

    public function scopeSort(Builder $builder, $column='id', $direction = 'DESC'): Builder
    {
        return $builder->orderBy($column, $direction);
    }
}