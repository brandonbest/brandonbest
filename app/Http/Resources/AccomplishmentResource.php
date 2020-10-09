<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccomplishmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $linkNext = optional($this->link_next);
        $linkPrevious = optional($this->link_previous);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'tagline' => $this->tagline,
            'icon' => $this->icon,
            'description' => $this->description,

            'links' => [
                'next' => [
                    'id' => $linkNext->id,
                    'title' => $linkNext->title,
                    'slug' => $linkNext->slug,
                    'icon' => $linkNext->icon,
                ],
                'previous' => [
                    'id' => $linkPrevious->id,
                    'title' => $linkPrevious->title,
                    'slug' => $linkPrevious->slug,
                    'icon' => $linkPrevious->icon,
                ],
            ]
        ];
    }
}
