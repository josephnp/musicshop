<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Role' => 'admin',
            'name' => 'admin',
            'email' => 'admin',
            'password' => bcrypt('admin'),
            'address' => '',
            'phone' => ''
        ]);

        DB::table('users')->insert([
            'Role' => 'user',
            'name' => 'Kara Delatorre',
            'email' => 'KaraDDelatorre@gmail.com',
            'password' => bcrypt('oQu4aphee'),
            'address' => 'Jalan Gedung Hijau Raya',
            'phone' => '082176514410'
        ]);

        DB::table('users')->insert([
            'Role' => 'user',
            'name' => 'Ira Bufford',
            'email' => 'Theart@gmail.com',
            'password' => bcrypt('Jo4IeChoo'),
            'address' => 'Jl. Dr. Setiabudi No.79',
            'phone' => '082184301994'
        ]);
        
        DB::table('users')->insert([
            'Role' => 'user',
            'name' => 'Jeanne Huskey',
            'email' => 'Whormill@gmail.com',
            'password' => bcrypt('ahPhi2goo'),
            'address' => 'PT. MENARA DUTA',
            'phone' => '083156738928'
        ]);
    }
}
