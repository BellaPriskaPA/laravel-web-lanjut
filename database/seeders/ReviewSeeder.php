<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
           'umkm_id' => 1,
           'review' => 'Kerajinannya bagus banget',
           'name' => 'Suparjo' 
        ]);

        DB::table('reviews')->insert([
           'umkm_id' => 1,
           'review' => 'Harganya murah murah',
           'name' => 'Bayu' 
        ]);

        DB::table('reviews')->insert([
           'umkm_id' => 2,
           'review' => 'Susunya enak banget',
           'name' => 'Dimitri mayakovski' 
        ]);

        DB::table('reviews')->insert([
           'umkm_id' => 2,
           'review' => 'Harganya juga murah',
           'name' => 'Alex' 
        ]);

        DB::table('reviews')->insert([
           'umkm_id' => 3,
           'review' => 'Rotinya enak',
           'name' => 'Rem' 
        ]);
    }
}
