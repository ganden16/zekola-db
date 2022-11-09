<?php

namespace Database\Seeders;

use App\Models\BarangKoperasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangKoperasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BarangKoperasi::create([
            'nama' => 'pensil 2b',
            'kategori' => 'atk',
            'status' => 'tersedia',
            'harga' => 3000 
        ]);
        BarangKoperasi::create([
            'nama' => 'penghapus',
            'kategori' => 'atk',
            'status' => 'tersedia',
            'harga' => 2000 
        ]);
        BarangKoperasi::create([
            'nama' => 'bulpoin pilot',
            'kategori' => 'atk',
            'status' => 'tersedia',
            'harga' => 3500 
        ]);
        BarangKoperasi::create([
            'nama' => 'lem povinal',
            'kategori' => 'lem',
            'status' => 'tersedia',
            'harga' => 2000 
        ]);
        BarangKoperasi::create([
            'nama' => 'teh pucuk harum',
            'kategori' => 'minuman ringan',
            'status' => 'tersedia',
            'harga' => 3000 
        ]);
        BarangKoperasi::create([
            'nama' => 'go potato',
            'kategori' => 'makanan ringan',
            'status' => 'tersedia',
            'harga' => 1000 
        ]);
    }
}
