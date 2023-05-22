<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BannedIpResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'addedBy' => $this->added_by,
            'status' => $this->status,
            'ip' => $this->ip,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at,
        ];
    }
}