<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        // Load JSON data from the file
        $json = File::get(path: 'database/json/company.json');
        $company = collect(json_decode($json));

        $company->each(function ($company) {
            Company::create([
                'id' => $company->id,
                'company_name' => $company->company_name,
                'user_id' => $company->user_id
            ]);
        });
    }
}
