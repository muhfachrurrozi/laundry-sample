<?php

namespace Database\Seeders;

use App\Models\jasa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Satuan
        Jasa::create([
            'item' => 'Baju',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Regular',
            'kategori' => 'Satuan',
            'harga' => '10000',
        ]);
        Jasa::create([
            'item' => 'Celana',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Regular',
            'kategori' => 'Satuan',
            'harga' => '12000',
        ]);
        Jasa::create([
            'item' => 'Jas',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Regular',
            'kategori' => 'Satuan',
            'harga' => '15000',
        ]);
        Jasa::create([
            'item' => 'Baju',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Regular',
            'kategori' => 'Satuan',
            'harga' => '12000',
        ]);
        Jasa::create([
            'item' => 'Celana',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Regular',
            'kategori' => 'Satuan',
            'harga' => '14000',
        ]);
        Jasa::create([
            'item' => 'Jas',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Regular',
            'kategori' => 'Satuan',
            'harga' => '16000',
        ]);
        Jasa::create([
            'item' => 'Baju',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Expres',
            'kategori' => 'Satuan',
            'harga' => '15000',
        ]);
        Jasa::create([
            'item' => 'Celana',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Expres',
            'kategori' => 'Satuan',
            'harga' => '18000',
        ]);
        Jasa::create([
            'item' => 'Jas',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Expres',
            'kategori' => 'Satuan',
            'harga' => '20000',
        ]);
        Jasa::create([
            'item' => 'Baju',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Expres',
            'kategori' => 'Satuan',
            'harga' => '18000',
        ]);
        Jasa::create([
            'item' => 'Celana',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Expres',
            'kategori' => 'Satuan',
            'harga' => '20000',
        ]);
        Jasa::create([
            'item' => 'Jas',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Expres',
            'kategori' => 'Satuan',
            'harga' => '22000',
        ]);

        //Kg


        Jasa::create([
            'item' => 'Baju',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Regular',
            'kategori' => 'Kg',
            'harga' => '7000',
        ]);
        Jasa::create([
            'item' => 'Celana',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Regular',
            'kategori' => 'Kg',
            'harga' => '9000',
        ]);
        Jasa::create([
            'item' => 'Jas',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Regular',
            'kategori' => 'Kg',
            'harga' => '11000',
        ]);
        Jasa::create([
            'item' => 'Baju',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Regular',
            'kategori' => 'Kg',
            'harga' => '9000',
        ]);
        Jasa::create([
            'item' => 'Celana',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Regular',
            'kategori' => 'Kg',
            'harga' => '11000',
        ]);
        Jasa::create([
            'item' => 'Jas',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Regular',
            'kategori' => 'Kg',
            'harga' => '14000',
        ]);
        Jasa::create([
            'item' => 'Baju',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Expres',
            'kategori' => 'Kg',
            'harga' => '13000',
        ]);
        Jasa::create([
            'item' => 'Celana',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Expres',
            'kategori' => 'Kg',
            'harga' => '15000',
        ]);
        Jasa::create([
            'item' => 'Jas',
            'servis' => 'Cuci, Lipat',
            'paket' => 'Expres',
            'kategori' => 'Kg',
            'harga' => '18000',
        ]);
        Jasa::create([
            'item' => 'Baju',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Expres',
            'kategori' => 'Kg',
            'harga' => '15000',
        ]);
        Jasa::create([
            'item' => 'Celana',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Expres',
            'kategori' => 'Kg',
            'harga' => '18000',
        ]);
        Jasa::create([
            'item' => 'Jas',
            'servis' => 'Cuci, Lipat, Gosok',
            'paket' => 'Expres',
            'kategori' => 'Kg',
            'harga' => '21000',
        ]);
    }
}
