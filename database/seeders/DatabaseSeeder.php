<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Item;
use Hash;
use Illuminate\Database\Seeder;
use \App\Models\Buyer;
use \App\Models\Seller;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Buyer::factory()->create([
            'b_name' => 'Muhammad Ghifari Taqiuddin',
            'b_email' => 'mghifarit53@gmail.com',
            'b_phoneno' => '0813-5931-6402',
            'b_address' => 'Jl. Teknik Komputer No. 78, Perumdos ITS Blok U',
            'password' => Hash::make('123123'),
        ]);

        Seller::factory()->create([
            's_name' => 'SneakersDept.',
            's_email' => 'admin@sneakersdept.com',
            's_phoneno' => '0312-334455',
            's_address' => 'Jl. Keputih Tegal Bakti IC No.100 - 103, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111',
            'password' => Hash::make('123123'),
        ]);

        Seller::factory()->create([
            's_name' => 'iSmile Indonesia.',
            's_email' => 'admin@ismile.id',
            's_phoneno' => '0123456',
            's_address' => 'Jl. Keputih Tegal Bakti IC No.100 - 103, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111',
            'password' => Hash::make('123123'),
        ]);

        // Item::factory()->create([

        // ]);
    }
}
