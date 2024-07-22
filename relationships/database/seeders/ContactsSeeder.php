<?php

namespace Database\Seeders;

use App\Models\Contacts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load JSON data from the file
        $json = File::get(path: 'database/json/students_contacts.json');
        $contact = collect(json_decode($json));

        $contact->each(function ($contact) {
            Contacts::create([
                'id' => $contact->id,
                'email' => $contact->email,
                'phone' => $contact->phone,
                'address' => $contact->address,
                'city' => $contact->city,
                'student_id' => $contact->student_id
            ]);
        });
    }
}
