<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'Tips Cepet tidur','content'=>'lorem ipsum'],
            ['title'=>'Haruskah Menunda Belajar?','content'=>'lorem ipsum'],
            ['title'=>'Mebangun Visi Misi Kesuksesan','content'=>'lorem ipsum']
        ];

        //memasukan data ke database
        DB::table('posts')->insert($posts);
    }
}
