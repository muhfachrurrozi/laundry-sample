<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new \App\Models\User;
        $user -> toko_id = '1';
        $user -> idm = '1';
        $user -> name = 'Admin';
        $user -> email = 'admin@gmail.com';
        $user -> telepon = '089637182189';
        $user -> alamat = 'Karawang';
        $user -> poto = 'Belum-ada-ya.png';
        $user -> hak = 'pemilik';
        $user -> password = 'admin123';

        $user -> save();
    }
}