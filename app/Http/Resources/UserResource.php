<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'image_url'      => $this->image_url,
            'height'         => $this->height,
            'weight'         => $this->weight,
            'age'           => $this->age,
            'fat_percentage' => $this->fat_percentage,
            'coash_name'     => $this->coash_name,
            'gender'         => $this->gender,
            'created_at'      => $this->created_at,
            'updated_at'      => $this->updated_at,
            'type'          =>$this->type,
            'rate'         =>!empty($this->rate)?$this->rate:null,

        ];

    }
}
