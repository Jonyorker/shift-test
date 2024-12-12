<?php

namespace Tests\Feature;

use App\Models\bisonweb\UserList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    protected array $connectionsToTransact = ['bisonweb'];

    /**
     * @test
     */
    public function creating_a_user(): void
    {
        UserList::factory()->create([
            'first_name' => 'jon',
        ]);

        $count = UserList::all()->count();
        $this->assertTrue($count == 1);

    }

    /**
     * @test
     */
    public function creating_a_user2(): void
    {
        UserList::factory()->create([
            'first_name' => 'jon',
        ]);

        $count = UserList::all()->count();
        $this->assertTrue($count == 1);
    }
}
