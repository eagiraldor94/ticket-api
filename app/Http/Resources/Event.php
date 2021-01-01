<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Event extends JsonResource
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
            'artist' => $this->artist,
            'location' => $this->location,
            'price' => $this->price,
            'cover_url' => $this->cover_url,
            'limit' => $this->limit,
            'assistants' => $this->assistants,
            'event_date' => $this->event_date,
        ];
    }
}
