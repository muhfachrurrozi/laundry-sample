<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $toko = new \App\Models\Toko;
        $toko -> name_toko = 'Bersih Laundry';
        $toko -> telepon_toko = '089637182189';
        $toko -> alamat_toko = 'Karawang';
        $toko -> logo_toko = 'Belum-ada-ya.png';

        $toko->save();
    }
}
