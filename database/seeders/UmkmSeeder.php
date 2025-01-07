<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('umkms')->insert([
            'business_name' => 'Berkah Ban Pak Riadi',
            'area' => 'Krajan',
            'address' => 'https://goo.gl/maps/WhhT1SeJdzxX7ri26',
            'description' => 'Berkah Ban Pak Riadi merupakan salah satu UMKM yang ada di Desa Kalimalang yang bergerak di bidang pembuatan pengolahan ban bekas menjadi pot bunga, ayunan, tempat sampah, kursi dan meja. Berkah Ban Pak Riadi berdiri mulai tahun 2019 yang berawal dari pandemi COVID-19, dimana pemilik usaha memecahkan permasalahan mengenai limbah ban yang dapat dimanfaatkan menjadi suatu kerajinan yang menguntungkan. Keunggulan pada produk ban ini adalah memiliki motif yang unik seperti motif kartun, buah, dan bisa di request oleh pelanggan. Pencapaian produksi terbanyak pada usaha ban bekas ini adalah 120 pot dengan kisaran harga Rp 35.000 sampai Rp 45.000.
',
            'instagram' => '',
            'facebook' => '',
            'twitter' => '',
            'image' => 'umkmImage1.jpg'
        ]);

        DB::table('umkms')->insert([
            'business_name' => 'Susu Dele Madu (SDM)',
            'area' => 'Kalimalang',
            'address' => 'Jualan keliling',
            'description' => 'Menjual susu kedele madu',
            'instagram' => '',
            'facebook' => '',
            'twitter' => '',
            'image' => 'umkmImage2.jpg'
        ]);

        DB::table('umkms')->insert([
            'business_name' => 'Roti Tri Murti',
            'area' => 'Sragi',
            'address' => 'https://goo.gl/maps/TwmbuF36ib1N4BDc8',
            'description' => 'Menjual berbagai macam roti',
            'instagram' => '',
            'facebook' => '',
            'twitter' => '',
            'image' => 'umkmImage3.jpg'
        ]);
    }
}
