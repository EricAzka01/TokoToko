<?php

namespace Database\Seeders;

use App\Models\ItemCondition;
use App\Models\ItemType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemType::create([
            "name" => "Beaker glass",
        ]);

        ItemType::create([
            "name" => "Microscope",
        ]);

        ItemType::create([
            "name" => "Bunsen burner",
        ]);

        ItemType::create([
            "name" => "Thermometer",
        ]);

        ItemType::create([
            "name" => "Dropper",
        ]);
    }
}
