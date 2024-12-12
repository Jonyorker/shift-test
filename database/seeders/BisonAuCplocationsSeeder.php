<?php

namespace Database\Seeders;

use App\Models\psbison\BisonAuCplocations;
use Illuminate\Database\Seeder;

class BisonAuCplocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->insertBisonAuCplocations('CPRLAC');
        $this->insertBisonAuCplocations('CPRVAU');
        $this->insertBisonAuCplocations('CPRWIN05');
        $this->insertBisonAuCplocations('CPIREG');
        $this->insertBisonAuCplocations('CPIEDM');
        $this->insertBisonAuCplocations('CPRCAL03');
        $this->insertBisonAuCplocations('CPRPIT');
        $this->insertBisonAuCplocations('CNIWIN01');
        $this->insertBisonAuCplocations('CNIEDM01');
        $this->insertBisonAuCplocations('CNICAL01');
        $this->insertBisonAuCplocations('CNIBRA01');
        $this->insertBisonAuCplocations('CNISTL');
        $this->insertBisonAuCplocations('CNISUR01');
    }

    public function insertBisonAuCplocations(string $cmp_id): void
    {
        BisonAuCplocations::create([
            'cmp_id' => $cmp_id,
        ]);
    }
}
