<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FileType extends Model
{
    public $timestamps = false;

    const RESUME = "resume";

    public function scopeSlug(Builder $builder, $slug): Builder
    {
        $slug = Str::slug($slug);
        $slug = trim($slug);
        return $builder->where('slug', $slug);
    }
}
