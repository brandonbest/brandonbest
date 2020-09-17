<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LegalResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'overview' => $this->overview,
            'icon' => $this->icon,
            'html' => $this->html,
        ];
    }
}
