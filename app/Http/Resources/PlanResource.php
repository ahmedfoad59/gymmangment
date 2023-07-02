<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Muscle;
use App\Models\Exercise;
class PlanResource extends JsonResource
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
            'user_id'            => $this->user_id,
            'day'           => $this->day, 
            'exercises'    =>Exercise::whereIn(json_decode($this->exercises))->get() ,
            'muscles'        => Muscle::whereIn(json_decode($this->muscles))->get(),
           
        ];

    }
}
