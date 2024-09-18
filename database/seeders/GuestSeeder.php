<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guest;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'fullname' => 'Syitha',
            'institutions_id' => 1,
            'from' => 'PT BIM',
            'phonenumber' => '08123456789',
            'email' => 'syitha@gmail',
            'note' => 'test',

        ]);
    }
}
