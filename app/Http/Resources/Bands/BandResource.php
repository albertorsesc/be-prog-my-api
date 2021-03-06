<?php

namespace App\Http\Resources\Bands;

use Illuminate\Http\Resources\Json\JsonResource;

class BandResource extends JsonResource
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
            'name' => $this->name,
            'country' => $this->whenLoaded('country'),
            'genres' => $this->whenLoaded('genres')
        ];
    }
}
