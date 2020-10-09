<?php

namespace App\Models;

use App\Models\Traits\TraitScopeActive;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class File extends Model
{
    use TraitScopeActive;

    public function file_type(): BelongsTo
    {
        return $this->belongsTo(FileType::class);
    }

    public function previews(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'file_images')->wherePivot('sort')->orderBy('file_images.sort', 'ASC');
    }

    public function preview(): HasOneThrough
    {
        return $this->hasOneThrough(Image::class, FileImage::class, 'image_id', 'id')->orderBy('file_images.sort', 'ASC');
    }

    public function scopeFileType(Builder $builder, $type): Builder
    {
        if (!($type instanceof FileType)) {
            $type = FileType::slug($type)->take(1)->first();
        }

        return $builder->where('file_type_id', $type->id);
    }

    /**
     * Only Find Files that are live
     *
     * @param Builder $builder
     *
     * @return Builder
     */
    public function scopeLive(Builder $builder): Builder
    {
        return $builder->active();
    }
}
