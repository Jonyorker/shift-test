<?php

namespace App\Services;

use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Hashing\AbstractHasher;

class SimpleHasher extends AbstractHasher implements Hasher
{
    public string $cipher = '';
    public string|int|false $ivLength = '';
    public string $iv = '';
    public string $key = '';

    public function __construct()
    {

        $this->cipher = config('app.cipher');
        $this->ivLength = openssl_cipher_iv_length($this->cipher);
        $this->iv = config('bison.password_encryption_iv');
        $this->key = config('bison.password_encryption_key');
    }

    /**
     * @param  array<int>  $options
     */
    public function make(mixed $value, array $options = []): bool|string
    {
        return openssl_encrypt($value, $this->cipher, $this->key, 0, $this->iv);
    }

    /**
     * @param  array<int>  $options
     */
    public function decrypt(string $value, array $options = []): bool|string
    {
        return openssl_decrypt($value, $this->cipher, $this->key, 0, $this->iv);
    }

    /**
     * @param  array<int>  $options
     */
    public function check(mixed $value, mixed $hashedValue, array $options = []): bool
    {
        return $this->make($value) === $hashedValue;
    }

    /**
     * @param  array<int>  $options
     */
    public function needsRehash(mixed $hashedValue, array $options = []): ?bool
    {
        // Your needsRehash implementation here
        return null;
    }
}
