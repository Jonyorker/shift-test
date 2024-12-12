<?php

namespace App\Http\Resources;

use App\Models\bisonweb\unused\UserListContactType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $user_list_contact_type_id
 * @property mixed $value
 * @property mixed $addons
 * @property mixed $is_primary
 * @property mixed $is_active
 * @property mixed $country_iso_code
 */
class UserListContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $type = UserListContactType::where('id', $this->user_list_contact_type_id)->get()->firstOrFail();

        return [
            'user_list_contact_type_id' => $type->code,
            'value' => $this->value,
            'addons' => $this->addons,
            'is_primary' => $this->is_primary,
            'is_active' => $this->is_active,
            'country_iso_code' => $this->country_iso_code,
        ];
    }
}
