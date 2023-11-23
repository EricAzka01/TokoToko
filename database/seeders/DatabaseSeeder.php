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
            's_name' => 'Sakinah Supermarket.',
            's_email' => 'admin@sakinahmart.com',
            's_phoneno' => '123-334455',
            's_address' => 'Jl. Keputih Tegal Bakti IC No.100 - 103, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111',
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

        Item::factory()->create([
            'i_name' => 'Apple iPhone 15 Garansi Resmi - 128GB 256GB 512GB - Blue+Proteksi, 128GB',
            'i_price' => 19399000,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/10/16/fe41d8fd-42b0-4ffb-8242-f878f9592e70.png',
            'seller_id' => 3,
        ]);

        Item::factory()->create([
            'i_name' => 'Samsung Galaxy S23 5G 8/128GB - Green',
            'i_price' => 11711500,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/9/5/1340e628-b7fe-4551-9a6d-da0da6d5c264.jpg',
            'seller_id' => 3,
        ]);

        Item::factory()->create([
            'i_name' => 'SAMSUNG SMART TV 65 INCH UHD 4K AU7002 W/ PURCOLOR - UA65AU7002KXXD',
            'i_price' => 9750000,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/10/12/08a0cca3-12e5-4dfd-88f6-5d743beb31f7.jpg',
            'seller_id' => 3,
        ]);

        Item::factory()->create([
            'i_name' => 'Sepatu Lari Pria ADIDAS DURAMO 10 GW8349 ORIGINAL - 46',
            'i_price' => 559500,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/9/11/608b6282-1fa3-4195-894c-ed4c63a0cd2d.png',
            'seller_id' => 2,
        ]);

        Item::factory()->create([
            'i_name' => 'Sepatu Sneakers Wanita NIKE COURT ROYALE AC AO2810111 ORIGINAL - 37.5',
            'i_price' => 599000,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/hDjmkQ/2023/11/23/6fa4450b-1569-4dc8-b072-0f1dfc2ae3b9.png',
            'seller_id' => 2,
        ]);

        Item::factory()->create([
            'i_name' => 'FUKUMI BERAS PORANG 100% ORIGINAL BOX 280gr | BERAS SHIRATAKI (Isi 7)',
            'i_price' => 61800,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/2/11/85bdf69b-2a36-4d06-a0f9-d22ca009e5f2.jpg',
            'seller_id' => 1,
        ]);

        Item::factory()->create([
            'i_name' => 'Nongshim Shin Ramyun Neoguri Udon Claypot Ramyun Kimchi Shrimp Ramyun - Kimchi',
            'i_price' => 13450,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/1/28/4f110d17-e0ae-402d-b26e-677aaa9c37f2.png',
            'seller_id' => 1,
        ]);

        Item::factory()->create([
            'i_name' => 'Nongshim Shin Ramyun Neoguri Udon Claypot Ramyun Kimchi Shrimp Ramyun - Kimchi',
            'i_price' => 13450,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/1/28/4f110d17-e0ae-402d-b26e-677aaa9c37f2.png',
            'seller_id' => 1,
        ]);

        Item::factory()->create([
            'i_name' => 'Nongshim Shin Ramyun Neoguri Udon Claypot Ramyun Kimchi Shrimp Ramyun - Kimchi',
            'i_price' => 13450,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/1/28/4f110d17-e0ae-402d-b26e-677aaa9c37f2.png',
            'seller_id' => 1,
        ]);

        Item::factory()->create([
            'i_name' => 'Nongshim Shin Ramyun Neoguri Udon Claypot Ramyun Kimchi Shrimp Ramyun - Kimchi',
            'i_price' => 13450,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/1/28/4f110d17-e0ae-402d-b26e-677aaa9c37f2.png',
            'seller_id' => 1,
        ]);

        Item::factory()->create([
            'i_name' => 'Nongshim Shin Ramyun Neoguri Udon Claypot Ramyun Kimchi Shrimp Ramyun - Kimchi',
            'i_price' => 13450,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/1/28/4f110d17-e0ae-402d-b26e-677aaa9c37f2.png',
            'seller_id' => 1,
        ]);

        Item::factory()->create([
            'i_name' => 'Nongshim Shin Ramyun Neoguri Udon Claypot Ramyun Kimchi Shrimp Ramyun - Kimchi',
            'i_price' => 13450,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/1/28/4f110d17-e0ae-402d-b26e-677aaa9c37f2.png',
            'seller_id' => 1,
        ]);

        Item::factory()->create([
            'i_name' => 'Sepatu Lari Pria ADIDAS DURAMO 10 GW8349 ORIGINAL - 46',
            'i_price' => 559500,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/9/11/608b6282-1fa3-4195-894c-ed4c63a0cd2d.png',
            'seller_id' => 2,
        ]);

        Item::factory()->create([
            'i_name' => 'Sepatu Lari Pria ADIDAS DURAMO 10 GW8349 ORIGINAL - 46',
            'i_price' => 559500,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/9/11/608b6282-1fa3-4195-894c-ed4c63a0cd2d.png',
            'seller_id' => 2,
        ]);

        Item::factory()->create([
            'i_name' => 'Sepatu Lari Pria ADIDAS DURAMO 10 GW8349 ORIGINAL - 46',
            'i_price' => 559500,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/9/11/608b6282-1fa3-4195-894c-ed4c63a0cd2d.png',
            'seller_id' => 2,
        ]);

        Item::factory()->create([
            'i_name' => 'Sepatu Lari Pria ADIDAS DURAMO 10 GW8349 ORIGINAL - 46',
            'i_price' => 559500,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/9/11/608b6282-1fa3-4195-894c-ed4c63a0cd2d.png',
            'seller_id' => 2,
        ]);


        Item::factory()->create([
            'i_name' => 'FUKUMI BERAS PORANG 100% ORIGINAL BOX 280gr | BERAS SHIRATAKI (Isi 7)',
            'i_price' => 61800,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/2/11/85bdf69b-2a36-4d06-a0f9-d22ca009e5f2.jpg',
            'seller_id' => 1,
        ]);


        Item::factory()->create([
            'i_name' => 'FUKUMI BERAS PORANG 100% ORIGINAL BOX 280gr | BERAS SHIRATAKI (Isi 7)',
            'i_price' => 61800,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/2/11/85bdf69b-2a36-4d06-a0f9-d22ca009e5f2.jpg',
            'seller_id' => 1,
        ]);

        Item::factory()->create([
            'i_name' => 'Apple iPhone 15 Garansi Resmi - 128GB 256GB 512GB - Blue+Proteksi, 128GB',
            'i_price' => 19399000,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/10/16/fe41d8fd-42b0-4ffb-8242-f878f9592e70.png',
            'seller_id' => 3,
        ]);

        Item::factory()->create([
            'i_name' => 'Apple iPhone 15 Garansi Resmi - 128GB 256GB 512GB - Blue+Proteksi, 128GB',
            'i_price' => 19399000,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/10/16/fe41d8fd-42b0-4ffb-8242-f878f9592e70.png',
            'seller_id' => 3,
        ]);

        Item::factory()->create([
            'i_name' => 'Apple iPhone 15 Garansi Resmi - 128GB 256GB 512GB - Blue+Proteksi, 128GB',
            'i_price' => 19399000,
            'i_description' => "Good",
            'i_stock' => 200,
            'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/10/16/fe41d8fd-42b0-4ffb-8242-f878f9592e70.png',
            'seller_id' => 3,
        ]);
    }
}
