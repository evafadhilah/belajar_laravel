<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barangs'=>'Tas Laptop','merk'=>'tumi','harga'=>'5000000'],
            ['nama_barangs'=>'Nike Air Max 270','merk'=>'nike','harga'=>' 2500000'],
            ['nama_barangs'=>'Adidas Ultraboost 22','merk'=>'Adidas','harga'=>' 3000000'],
            ['nama_barangs'=>'Uniqlo Men’s Supima Cotton T-shirt','merk'=>'Uniqlo','harga'=>'350000'],
            ['nama_barangs'=>'Zara Basic Blazer','merk'=>'zara','harga'=>'1500000'],
            ['nama_barangs'=>'H&M Hooded Sweatshirt','merk'=>'H&M','harga'=>'400000'],
            
        ];

        //memasukan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
