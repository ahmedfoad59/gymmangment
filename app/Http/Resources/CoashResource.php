<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Ratecoash;

class CoashResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    // $users =Ratecoash::where('Coash_id',$this->id)->get()->count();
    // $ids =Ratecoash::where('Coash_id',$this->id)->pulck('stars')->toArray();

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
            'rate'=>Ratecoash::where('Coash_id',$this->id)->first(),
        ];

    }
}
