<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Topicality extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /* return parent::toArray($request); */
        return [
            'title' => 'ceci est le titre ' . $this->title,
            'content' => substr($this->content, 0, 20) . '...'
        ];
    }
}