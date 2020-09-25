<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillResource extends JsonResource
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
            'skill' => $this->skill,
            'skill_level' => $this->skill_level,
            'line_items' => SkillLineItemResource::collection($this->lineItems),
        ];
    }
}
