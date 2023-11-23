<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Buyer::factory()->make([
            'b_name' => 'Muhammad Ghifari Taqiuddin',
            'b_email' => 'mghifarit53@gmail.com',
            'b_phoneno' => '0813-5931-6402',
            'b_address' => 'Jl. Teknik Komputer No. 78, Perumdos ITS Blok U',
            'password' => Hash::make('1'),
        ]);

        Seller::factory()->make([
            's_name' => 'Sakinah Supermarket',
            's_email' => 'admin@sakinahmart.com',
            's_phoneno' => '031-59176194',
            's_address' => 'Jl. Keputih Tegal Bakti IC No.100 - 103, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111',
            'password' => Hash::make('1'),
        ]);
    }
}
