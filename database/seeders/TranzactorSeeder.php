<?php

namespace Database\Seeders;

use App\Models\Tranzactor\Transaction;
use Illuminate\Database\Seeder;

class TranzactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::factory(20)->create();
    }
}
