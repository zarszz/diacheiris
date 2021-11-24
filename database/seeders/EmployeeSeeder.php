<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::insert(
            [
                [
                    'name' => 'budi',
                    'company_id' => 1
                ],
                [
                    'name' => 'sule',
                    'company_id' => 2
                ]
            ]
        );
    }
}
