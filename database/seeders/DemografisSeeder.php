<?php

namespace Database\Seeders;

use App\Models\Demografis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemografisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Demografis::factory(100)->create();
    }
}
