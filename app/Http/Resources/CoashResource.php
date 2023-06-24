<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CoashResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                 => $this->id,
            'name'            => $this->name,
            'email'           => $this->email,
            'phone_number'    => $this->phone_number,
            'image'        => $this->image,
            'salary'      => $this->salary,
            'joined_at'    => $this->joined_at,
        ];

    }
}
