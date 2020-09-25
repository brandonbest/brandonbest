<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillCategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'category' => $this->category,
            'icon' => $this->icon,
            'description' => $this->description,
            'skills' => SkillResource::collection($this->skills),
        ];
    }
}
