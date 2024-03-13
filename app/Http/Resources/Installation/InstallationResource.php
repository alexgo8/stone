<?php

namespace App\Http\Resources\Installation;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InstallationResource extends JsonResource
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
          'size' => $this->size,
          'price' => $this->price,
          'material_id' => $this->material()->select('id', 'name')->get(),          
        ];
    }
}

