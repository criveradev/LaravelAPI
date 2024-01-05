<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        #Configuramos los recursos que deseamos mostrar en la api v2
        return [
            'id'        => $this->id,
            'post_name' => $this->title,
            'slug'      => $this->slug,
            'content'   => $this->content,
            'author'    => [
                'name'  => $this->user->name,
                'email' => $this->user->email
            ],
            'created'  => $this->created_at
        ];
    }
}
