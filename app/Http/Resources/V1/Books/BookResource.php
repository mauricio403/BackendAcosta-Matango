<?php

namespace App\Http\Resources\V1\Books;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
          
                
                'code' => $this->code,
                'date' => $this->date,
                'description' => $this->description,
                'published' => $this->published,
                'title' => $this->title,
            
        ];
    }
}
