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
        $dhakaTimeZone = 'Asia/Dhaka';

        return [
            'id' => $this->id,
            'credits' => $this->credits,
            'feature' => new FeatureResource($this->feature),
            'created_at' => $this->created_at->setTimezone($dhakaTimeZone)->format('d-m-Y , h:i:s A'),
            'updated_at' => $this->updated_at->setTimezone($dhakaTimeZone)->format('d-m-y , h:i:s A'),
            'data' => $this->data
        ];
    }
}
