<?php

namespace App\Http\Resources;

use App\Models\bisonweb\UserList;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserListCollectionResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @response AnonymousResourceCollection<UserListResource>
     */
    public function toArray(Request $request): AnonymousResourceCollection
    {
        return UserListResource::collection(UserList::all());
    }
}
