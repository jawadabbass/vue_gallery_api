<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'name' => $this->name,
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'views' => $this->views,
            'likes' => $this->likes,
            'dislikes' => $this->dislikes,
            'edit_url' => url('api/v1/images/' . $this->id),
            'category_url' => url('api/v1/categories/' . $this->category_id),
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
