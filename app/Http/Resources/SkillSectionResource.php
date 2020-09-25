<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillSectionResource extends JsonResource
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
            'section' => $this->section,
            'icon' => $this->icon,
            'description' => $this->description,
            'categories' => SkillCategoryResource::collection($this->categories),
        ];
    }
}
