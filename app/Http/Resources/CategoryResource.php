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
        return [
            "name" => $this->name,
            "slug" => $this->slug,
            //it was "children"=>CategoryResource::collection($this->children) and got epty array in the end
            "children"=>CategoryResource::collection($this->whenLoaded('children')) //when it has children $this->whenLoaded('children')
        ];
    }
}
