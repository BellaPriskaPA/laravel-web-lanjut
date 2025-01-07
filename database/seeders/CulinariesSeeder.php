<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class culinariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('culinaries')->insert([
            'business_name' => 'Sambel Ijo Rasa Basa',
            'area' => 'Prayungan',
            'address' => 'https://maps.app.goo.gl/xaUHj53XT9ztzBVi8?g_st=com.google.maps.preview.copy',
            'description' => 'RM Sambel Ijo, menawarkan suasana segar dan sejuk yang menarik pelanggan dari berbagai kota. Usaha ini dirintis sejak tahun 2015, yang bermula dari warung hingga sekarang menjadi RM dengan konsep prasmanan, yang menyajikan nasi, ayam, bebek, lele goreng, lalapan, dan sambal.',
            'instagram' => '',
            'facebook' => '',
            'twitter' => '',
            'image' => 'culinaryImage1.jpg'
        ]);

        DB::table('culinaries')->insert([
            'business_name' => 'Bebek Rempah Mbak Pipiet',
            'area' => 'Brajan',
            'address' => 'https://maps.app.goo.gl/5h1xMqWPf3Zh2N537?g_st=com.google.maps.preview.copy',
            'description' => 'Bebek rempah Mbak Pipit, seperti namanya di tempat ini menyediakan menu spesial nasi bebek rempah. Tidak cuma dibuat dengan aneka bumbu rempah pilihan, namun juga memberikan toping berupa taburan serundeng yang khas. Bagi yang pecinta pedas, olahan sambal terasi maupun sambal tomatnya cukup enak dan sangat pedas.',
            'instagram' => '@bebek.rempah_mbak.pipiet',
            'facebook' => '',
            'twitter' => '',
            'image' => 'culinaryImage2.jpg'
        ]);

        DB::table('culinaries')->insert([
            'business_name' => 'Ratu Seblak',
            'area' => 'Karangjati',
            'address' => 'https://maps.app.goo.gl/UC24QnZFNpNrawyx7?g_st=com.google.maps.preview.copy',
            'description' => 'Ratu Seblak adalah destinasi kuliner yang buka setiap hari mulai pukul 09.00 pagi hingga 21.00 malam. Tempat ini menawarkan konsep seblak prasmanan, pengunjung dapat memilih berbagai macam topping sesuai selera. Selain seblak, Ratu Seblak juga menyediakan berbagai menu pendamping lainnya yang tak kalah lezat, menjadikannya tempat favorit bagi pecinta makanan pedas dan beragam.',
            'instagram' => '@ratuseblak_ponorogo',
            'facebook' => '',
            'twitter' => '',
            'image' => 'gambar seblak'
        ]);
    }
}
