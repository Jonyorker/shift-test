<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Example of calling a factory directly. Generally we call the class directly and avoid imports as it would be
        // a very long list of imports

        // App\Models\psbison\Stops::factory(10)->has(StopsAutoActualizationByTime::factory()->count(1))->create();

        // Example of calling a seeder class
        $this->call([
            TranzactorSeeder::class,
        ]);
    }
}
