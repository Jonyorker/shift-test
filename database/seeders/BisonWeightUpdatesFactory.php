<?php

namespace Database\Seeders;

use App\Models\psbison\BisonWeightUpdates;
use Illuminate\Database\Seeder;

class BisonWeightUpdatesFactory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BisonWeightUpdates::factory(20)->create();
    }
}
