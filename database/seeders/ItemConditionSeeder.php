<?php

namespace Database\Seeders;

use App\Models\ItemCondition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemCondition::create([
            "name" => "Good",
        ]);

        ItemCondition::create([
            "name" => "Fair",
        ]);

        ItemCondition::create([
            "name" => "Bad",
        ]);
    }
}
