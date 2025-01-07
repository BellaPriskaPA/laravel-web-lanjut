<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('batiks')->insert([
            'business_name' => 'Batik Lenggo',
            'address' => 'maps.com',
            'description' => 'batiknya bagus',
            'image' => 'gambar batik'  
        ]);

        DB::table('batiks')->insert([
            'business_name' => 'Batik Bagus',
            'address' => 'maps.com',
            'description' => 'batiknya awet cuy',
            'image' => 'gambar batik'  
        ]);
    }
}
