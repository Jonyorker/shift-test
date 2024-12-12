<?php

namespace Tests\Unit\examples;

use App\Jobs\TestSend;
use Tests\TestCase;

class RabbitTest extends TestCase
{
    /**
     * @test Redis functionality
     */
    public function test_rabbit_connection(): void
    {

        TestSend::dispatch([
            'id' => 1,
        ]);
        $this->assertTrue(true);

    }
}
