<?php

namespace App\Providers;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class RbacUserProvider extends EloquentUserProvider
{
    public function validateCredentials(UserContract $user, array $credentials): bool
    {
        if (is_null($password = $credentials['password'])) {
            return false;
        }

        return $this->hasher->check($password, $user->getAuthPassword());
    }
}
