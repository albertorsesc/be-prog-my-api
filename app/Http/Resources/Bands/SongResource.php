<?php

namespace App\Http\Resources\Bands;

use Illuminate\Http\Resources\Json\JsonResource;

class SongResource extends JsonResource
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
            'album' => new AlbumResource($this->whenLoaded('album')),
            'title' => $this->title,
            'duration' => $this->duration,
            'written_by' => $this->written_by,
        ];
    }
}
