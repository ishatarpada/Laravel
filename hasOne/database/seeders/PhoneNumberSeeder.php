<?php

namespace Database\Seeders;

use App\Models\PhoneNumber;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PhoneNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        // Load JSON data from the file
        $json = File::get(path: 'database/json/phoneNumber.json');
        $phoneNumber = collect(json_decode($json));

        $phoneNumber->each(function ($phoneNumber) {
            PhoneNumber::create([
                'id' => $phoneNumber->id,
                'numbers' => $phoneNumber->phoneNumber,
                'company_id' => $phoneNumber->company_id
            ]);
        });
    }
}
