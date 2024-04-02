<?php

namespace Database\Seeders;

use App\Models\Resources;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Resources::factory()->count(50)->create();
    }
}
