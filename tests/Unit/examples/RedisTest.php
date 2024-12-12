<?php

namespace Tests\Unit\examples;

use Illuminate\Support\Facades\Cache;
use Tests\TestCase;

class RedisTest extends TestCase
{
    /**
     * @test Redis functionality
     */
    public function test_redis_connection()
    {

        $value = 'This is a value stored in Redis';
        Cache::put('testKey', $value, 10); // Store a value for 10 minutes
        $response = Cache::get('testKey');

        $this->assertEquals($value, $response);

    }
}
