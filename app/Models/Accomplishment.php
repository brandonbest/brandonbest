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

    /**
     * @return Accomplishment|null
     */
    public function getLinkNextAttribute()
    {
        $accomplishment = Accomplishment::active()->sort()->sortId()
            ->where('sort', '>=', $this->sort)
            ->where('id', '>', $this->id)
            ->take(1)->first();

        return $accomplishment ?? null;
    }

    public function getLinkPreviousAttribute()
    {
        $accomplishment = Accomplishment::active()->sort('DESC')->sortId('id', 'DESC')
            ->where('sort', '<=', $this->sort)
            ->where('id', '<', $this->id)
            ->take(1)->first();

        return $accomplishment ?? null;
    }
}
