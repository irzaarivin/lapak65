<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
            'name' => 'Pecinta Fashion',
            'description' => 'Tersedia baju ukuran anak-anak sampai dewasa.',
            'location' => 'Jakarta',
            'thumb' => 'pecinta-fashion.png',
            'telephone' => '087583643779',
            'email' => 'pecinta.fashion@gmail.com'
        ]);

        Shop::create([
            'name' => 'SerbaSerbi Elektronik',
            'description' => 'Menjual dari periferal gaming, sampai alat memasak',
            'location' => 'Jakarta',
            'thumb' => 'serbaserbi-elektronik.png',
            'telephone' => '081245578319',
            'email' => 'serbaserbi_elektronik31@gmail.com'
        ]);

        Shop::create([
            'name' => 'House Store',
            'description' => 'Menyediakan furniture dan aksesoris untuk rumah agar terlihat lebih cantik',
            'location' => 'Jakarta',
            'thumb' => 'house-store.png',
            'telephone' => '081237736565',
            'email' => 'house_store@gmail.com'
        ]);
    }
}
