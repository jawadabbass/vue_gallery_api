<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->description,
            'edit_url' => url('api/v1/categories/' . $this->id)
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
