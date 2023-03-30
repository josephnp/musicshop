<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Pop'
        ]);

        DB::table('categories')->insert([
            'name' => 'Rock'
        ]);

        DB::table('categories')->insert([
            'name' => 'Christmas'
        ]);

        DB::table('categories')->insert([
            'name' => 'Hip Hop'
        ]);

        DB::table('categories')->insert([
            'name' => 'Indie'
        ]);

        DB::table('categories')->insert([
            'name' => 'R&B'
        ]);
    }
}
