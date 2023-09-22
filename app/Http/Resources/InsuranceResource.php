<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InsuranceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'type' => $this->type,
            'icon_url' => $this->icon_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'questions' => QuestionResource::collection($this->questions)
        ];
    }
}