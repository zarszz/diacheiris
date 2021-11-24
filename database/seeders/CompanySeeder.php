<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert(
            [
                [
                    'name' => 'Company 1',
                    'logo' => 'https://via.placeholder.com/100',
                    'email' => 'company1@mail.com',
                    'website' => 'www.company1.com'
                ],
                [
                    'name' => 'Company 2',
                    'logo' => 'https://via.placeholder.com/100',
                    'email' => 'company2@mail.com',
                    'website' => 'www.company2.com'
                ]
            ]
        );
    }
}
