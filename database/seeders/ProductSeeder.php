<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'You Are the Apple of My Eye',
            'picture' => 'image/xiahu.jpg',
            'price' => 250000,
            'stock' => 18,
            'description' => 'Taiwanese song',
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Unbreakable Love',
            'picture' => 'image/ul.jpeg',
            'price' => 325000,
            'stock' => 4,
            'description' => 'Song by Eric Chou',
        ]);

        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Everyday Is Christmas',
            'picture' => 'image/snowman.jpg',
            'price' => 350000,
            'stock' => 8,
            'description' => 'Everyday Is Christmas is the eighth studio album and first Christmas album by Australian singer-songwriter Sia',
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Unorthodox Jukebox',
            'picture' => 'image/uj.png',
            'price' => 350000,
            'stock' => 25,
            'description' => 'Unorthodox Jukebox is the second studio album by American singer and songwriter Bruno Mars',
        ]);

        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'Skool Luv Affair',
            'picture' => 'image/skool.jpg',
            'price' => 275000,
            'stock' => 20,
            'description' => 'Skool Luv Affair is the second extended play by South Korean boy band BTS',
        ]);

        DB::table('products')->insert([
            'category_id' => 5,
            'name' => 'Ego & Fungsi Otak',
            'picture' => 'image/ego.jpg',
            'price' => 225000,
            'stock' => 24,
            'description' => 'Album by Fourtwnty',
        ]);

        DB::table('products')->insert([
            'category_id' => 6,
            'name' => 'Ctrl',
            'picture' => 'image/ctrl.png',
            'price' => 225000,
            'stock' => 19,
            'description' => 'Ctrl (pronounced "control") is the debut studio album by American singer SZA',
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'The Singles',
            'picture' => 'image/singles.jpg',
            'price' => 350000,
            'stock' => 16,
            'description' => 'Album by Padi',
        ]);

        DB::table('products')->insert([
            'category_id' => 5,
            'name' => 'Pony',
            'picture' => 'image/pony.png',
            'price' => 225000,
            'stock' => 19,
            'description' => 'Pony is the third studio album and major-label debut by English musician Rex Orange County',
        ]);

        DB::table('products')->insert([
            'category_id' => 6,
            'name' => 'Positions',
            'picture' => 'image/positions.png',
            'price' => 300000,
            'stock' => 6,
            'description' => 'Positions is the sixth studio album by American singer Ariana Grande',
        ]);

        DB::table('products')->insert([
            'category_id' => 6,
            'name' => 'SOS',
            'picture' => 'image/sos.png',
            'price' => 275000,
            'stock' => 22,
            'description' => 'SOS is the second studio album by American singer SZA',
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'TIME',
            'picture' => 'image/time.jpg',
            'price' => 400000,
            'stock' => 17,
            'description' => 'TIME is the seventh album by band group D\'Masiv released on February 25, 2022',
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Face the Sun',
            'picture' => 'image/facethesun.png',
            'price' => 300000,
            'stock' => 17,
            'description' => 'Album made by SEVENTEEN',
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Crush',
            'picture' => 'image/crush.jpg',
            'price' => 350000,
            'stock' => 10,
            'description' => 'Crush is the seventh studio album by American rock band Bon Jovi',
        ]);
    }
}
