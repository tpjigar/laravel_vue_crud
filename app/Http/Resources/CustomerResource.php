<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'uniquecode' => $this->uniquecode,
            'name' => $this->name,
            'username' => $this->username,
            'birthdate' => $this->birthdate,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'emails' => new EmailCollection($this->whenLoaded('emails')),
            'phones' => new PhoneCollection($this->whenLoaded('phones')),
            'pictures' => new PictureCollection($this->whenLoaded('pictures'))
        ];
    }
}
