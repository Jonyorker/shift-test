<?php

namespace Tests\Unit\examples;

use App\Helpers\Constants\EmailGroups;
use Tests\TestCase;

class ConstantTest extends TestCase
{
    /**
     * @test Reflection Class on constants
     */
    public function constant_reflection_class(): void
    {

        $constants = emailGroups::getConstants();
        $this->assertIsArray($constants);

        $this->assertEquals('webservices@bisontransport.com', $constants['WEB_TECH']['email']);

    }
}
