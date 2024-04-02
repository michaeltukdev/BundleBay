<?php

namespace Database\Seeders;

use App\Models\Languages;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Languages::factory()->count(10)->create();
    }
}
