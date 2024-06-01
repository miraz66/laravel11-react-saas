<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsedFeatureResource extends JsonResource
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
            'credits' => $this->credits,
            'feature' => new FeatureResource($this->feature),
            'created_at' => $this->created_at->format('yyyy-MM-dd HH:mm:ss'),
            'updated_at' => $this->updated_at->format('yyyy-MM-dd HH:mm:ss'),
            'data' => $this->data
        ];
    }
}
