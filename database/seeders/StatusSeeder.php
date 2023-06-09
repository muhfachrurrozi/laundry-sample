<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name_status' => 'Proses',
        ]);
        Status::create([
            'name_status' => 'Berjalan',
        ]);
        Status::create([
            'name_status' => 'Selesai',
        ]);
    }
}