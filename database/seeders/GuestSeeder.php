<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guest;
use App\Models\Institution;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institution::create(['name' => 'Perusahan']);
        Institution::create(['name' => 'Dinas']);
        Institution::create(['name' => 'Sekolah']);

        Guest::factory(100)->create();
    }
}
