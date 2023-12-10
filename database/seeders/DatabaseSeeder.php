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
            's_address' => 'Jl. Prapanca Raya No.39, Daerah Khusus Ibukota Jakarta RT.2, RT.5/RW.3, Pulo, Kebayoran Baru, Jakarta 12160',
            'password' => Hash::make('123123'),
        ]);

        Seller::factory()->create([
            's_name' => 'iBox Indonesia',
            's_email' => 'admin@ibox.co.id',
            's_phoneno' => '0123456',
            's_address' => 'iBox Lippo Plaza Jember Ground Floor',
            'password' => Hash::make('123123'),
        ]);

        $items = [
            // 
            // Electronics Shop
            //
            [
                'i_name' => 'Apple iPhone 15 128GB Blue',
                'i_price' => 19399000,
                'i_description' => "1. Brand new - Original - Segel
                2. Garansi Apple 1 Tahun, Garansi Toko 7 Hari
                3. Gratis Ongkir & Asuransi + Cashback up to 300rb + Bisa COD
                4. Positif review 99 % dari 100 % kepuasan customer
                5. Sudah melayani 100,000 ++ customer secara online
                6. After sales yg siap melayani anda selama 24 jam
                ",
                'i_stock' => 200,
                'i_slug' => 'apple-iphone-15-128gb-blue-cc09e781ea',
                'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/10/16/fe41d8fd-42b0-4ffb-8242-f878f9592e70.png',
                'seller_id' => 2,
            ], [
                'i_name' => 'Apple iPhone 15 256GB Blue',
                'i_price' => 20399000,
                'i_description' => "1. Brand new - Original - Segel
                2. Garansi Apple 1 Tahun, Garansi Toko 7 Hari
                3. Gratis Ongkir & Asuransi + Cashback up to 300rb + Bisa COD
                4. Positif review 99 % dari 100 % kepuasan customer
                5. Sudah melayani 100,000 ++ customer secara online
                6. After sales yg siap melayani anda selama 24 jam
                ",
                'i_stock' => 200,
                'i_slug' => 'apple-iphone-15-256gb-blue-5a635ae91d',
                'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/10/16/fe41d8fd-42b0-4ffb-8242-f878f9592e70.png',
                'seller_id' => 2,
            ], [
                'i_name' => 'Samsung Galaxy S23+ 5G 8GB/256GB - Cream',
                'i_price' => 14499000,
                'i_description' => "
                Enjoy Offer Priode Promo 5 September - 6 Oktober
                - Free Youtube Premium 4 Bulan senilai Rp 236K via SGI
                
                Warna Cream
                Jaringan
                • Dual-SIM 5G
                Sistem Operasi
                • Android 13, One UI 3.1
                Prosesor• Snapdragon 8 Gen 2 (4nm)• RAM 8 GB• ROM 256GB",
                'i_stock' => 200,
                'i_slug' => 'samsung-galaxy-s23-5g-8gb-256gb-cream-5b5a2d0e2d',
                'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/6/8/1e3449bf-37cc-455b-b2f5-98bcae61987b.jpg',
                'seller_id' => 2,
            ], [
                'i_name' => 'Samsung Galaxy S23 5G 8/128GB - Green',
                'i_price' => 11711500,
                'i_description' => '
                Enjoy Offer Priode Promo 5 September - 6 Oktober
                - Free Youtube Premium 4 Bulan senilai Rp 236K via SGI
                
                Warna Green
                Jaringan
                • Dual-SIM 5G
                Sistem Operasi
                • Android 13, One UI 3.1
                Prosesor• Snapdragon 8 Gen 2 (4nm)• RAM 8 GB• ROM 128GB',
                'i_stock' => 200,
                'i_slug' => 'samsung-galaxy-s23-5g-8-128gb-green-b1f8f8371c',
                'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/9/5/1340e628-b7fe-4551-9a6d-da0da6d5c264.jpg',
                'seller_id' => 2,
            ], [
                'i_name' => 'Samsung Smart TV 65" UHD 4K - UA65AU7002KXXD',
                'i_price' => 9750000,
                'i_description' => 'Package Size (WxHxD)

                1645 x 1020 x 162 mm      
                Set Size with Stand (WxHxD)
                
                1450.7 x 907.1 x 284.1 mm
                Set Size without Stand (WxHxD)
                1450.7 x 840.8 x 74.1 mm
                ',
                'i_stock' => 200,
                'i_slug' => 'samsung-smart-tv-65-uhd-4k-ua65au7002kxxd-451b647bae',
                'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/10/12/08a0cca3-12e5-4dfd-88f6-5d743beb31f7.jpg',
                'seller_id' => 2,
            ], 

            // 
            //  Shoes Shop
            //
            [
                'i_name' => 'Adidas Duramo 10 GW8349 ORIGINAL - 46',
                'i_price' => 559500,
                'i_description' => '
                Brand New In Box - Fullset
Original Guarantee 100%

Size
(Tertera di variant product)

Untuk menjaga agar dus sepatumu tetap aman, silahkan gunakan Additional Double Box dari Sneakersdept. Cuman 10rb!',
                'i_stock' => 200,
                'i_image' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/9/11/608b6282-1fa3-4195-894c-ed4c63a0cd2d.png',
                'i_slug' => 'adidas-duramo-10-gw8349-original-46-7502ddc450',
                'seller_id' => 1,
            ], [
                'i_name' => 'Nike Court Royale AC AO2810111 ORIGINAL - 37.5',
                'i_price' => 599000,
                'i_description' => '
                Brand New In Box - Fullset
Original Guarantee 100%

Size
(Tertera di variant product)

Untuk menjaga agar dus sepatumu tetap aman, silahkan gunakan Additional Double Box dari Sneakersdept. Cuman 10rb!',
                'i_stock' => 200,
                'i_image' => 'https://images.tokopedia.net/img/cache/900/hDjmkQ/2023/11/23/6fa4450b-1569-4dc8-b072-0f1dfc2ae3b9.png',
                'i_slug' => 'nike-court-royale-ac-ao2810111-original-375-06f95dca2a',
                'seller_id' => 1,
            ]
        ];

        foreach ($items as $item) {
            Item::factory()->createOne($item);
        }
    }
}
