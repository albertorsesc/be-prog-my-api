<?php

namespace App\Http\Resources\Bands;

use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
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
            'band' => new BandResource($this->whenLoaded('band')),
            'title' => $this->title,
            'releasedAt' => $this->released_at,
        ];
    }
}
