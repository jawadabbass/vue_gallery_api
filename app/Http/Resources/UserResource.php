<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'edit_url' => url('api/v1/user/' . $this->id)
        ];
    }

    public function with($request)
    {
        return [
            'version' => '1',
            'author_url' => url('http://jawadabbass.com')
        ];
    }
}
