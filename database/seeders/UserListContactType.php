<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserListContactType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->insertUserListContractType('Landline', 'landline');
        $this->insertUserListContractType('Mobile', 'mobile');
        $this->insertUserListContractType('Fax', 'fax');
        $this->insertUserListContractType('Email', 'email');
        $this->insertUserListContractType('Landline (Work)', 'landline_work');
        $this->insertUserListContractType('Mobile (Work)', 'mobile_work');
        $this->insertUserListContractType('Email (Work)', 'email_work');
        $this->insertUserListContractType('Emergency', 'emergency');
        $this->insertUserListContractType('Emergency (Work)', 'emergency_work');
        $this->insertUserListContractType('Emergency (Mobile)', 'emergence_mobile');
    }

    public function insertUserListContractType(string $label, string $code): void
    {
        DB::table('user_list_contact_type')->insert([
            'label' => $label,
            'code' => $code,
            'is_active' => 1,
        ]);
    }
}
