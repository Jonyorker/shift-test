<?php

namespace Tests\Unit\app\Rules;

use App\Rules\Boolean;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class BooleanTest extends TestCase
{
    public static function validate_DataProvider(): array
    {
        return [
            [true], [false], [0], [1], ['0'], ['1'], ['true'], ['false'], ['True'], ['False'],
        ];
    }

    /**
     * @dataProvider validate_DataProvider
     *
     * @test
     */
    public function boolean_acceptable($value): void
    {

        $validator = Validator::make(['myparam' => $value], ['myparam' => new Boolean]);

        // Check if messages is empty.
        $this->assertEquals('', $validator->messages()->first('myparam'));
    }

    //    public function test_boolean_fail() {
    ////
    ////        $fail = fn($message) => $this->assertEquals($message, 'The :attribute must be uppercase.');
    ////
    ////        $validator = new \App\Rules\Boolean();
    ////
    ////        $this->assertEquals($validator->validate('myparam', 'myvalue', $fail));
    //
    //        $validator = Validator::make(['myparam' => fake()->text(6)], ['myparam' => new Boolean]);
    //
    //        print_r($validator->messages()->messages());
    //            // Check if messages is empty.
    //        $this->assertEquals("", $validator->messages());
    //    }
}
