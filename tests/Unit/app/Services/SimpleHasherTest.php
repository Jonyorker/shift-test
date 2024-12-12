<?php

namespace Tests\Unit\app\Services;

use App\Services\SimpleHasher;
use Tests\TestCase;

class SimpleHasherTest extends TestCase
{
    /**
     * @test
     */
    public function check(): void
    {
        $result = (new SimpleHasher)->check('test', 'jB1Elv0wNs7Eek/9pJfwgg==');
        $this->assertTrue($result);

        $result = (new SimpleHasher)->check('password', 'jB1Elv0wNs7Eek/9pJfwgg==');
        $this->assertFalse($result);

        $result = (new SimpleHasher)->check('test', 'ElcLOMZNI34KJ+xBuFLiEQ==');
        $this->assertFalse($result);

        $result = (new SimpleHasher)->check('password', 'ElcLOMZNI34KJ+xBuFLiEQ==');
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function decrypt(): void
    {
        // Precalculated value to test if it works fine
        $value = 'jB1Elv0wNs7Eek/9pJfwgg==';

        $test = (new SimpleHasher)->decrypt($value);
        $this->assertEquals('test', $test);
    }

    /**
     * @test
     */
    public function make(): void
    {

        // Precalculated value to test if it works fine
        $value = 'jB1Elv0wNs7Eek/9pJfwgg==';

        $test = (new SimpleHasher)->make('test');
        $this->assertEquals($value, $test);
    }

    /**
     * @test
     */
    public function needsRehash(): void
    {
        $this->assertNull((new SimpleHasher)->needsRehash('test'));
    }
}
