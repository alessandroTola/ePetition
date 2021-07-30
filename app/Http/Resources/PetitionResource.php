<?php

namespace App\Http\Resources;

use App\Models\Author;
use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
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
            'title' => ucwords($this->title),
            'description' => $this->description,
            'category' => $this->category,
            'author_name' => Author::find($this->author_id)->name,
            'signees' => $this->signees,
        ];
    }
}
