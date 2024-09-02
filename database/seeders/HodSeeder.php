<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hod;
use Illuminate\Support\Facades\Hash;

class HodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hod::create([
            'hod_name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('password123'), // Hash the password
            'contact_number' => '1234567890',
        ]);
    }
}
