<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $first_name
 * @property mixed $last_name
 */
class UserListWithRelationsResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'address' => new UserListAddressResource($this->whenLoaded('UserListAddress')),
            'company' => new UserListCompanyResource($this->whenLoaded('UserListCompany')),
            'contacts' => UserListContactResource::collection($this->whenLoaded('UserListContact')),
        ];
    }
}
