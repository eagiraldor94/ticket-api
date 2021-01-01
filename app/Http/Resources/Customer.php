<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Customer extends JsonResource
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
            'name' => $this->name,
            'id_type' => $this->id_type,
            'id_number' => $this->id_number,
            'country' => $this->country,
            'country_code' => $this->country_code,
            'phone' => $this->phone,
            'email' => $this->email,
            'status_code' => 200,
            'message' => 'OK',
        ];
    }
}
