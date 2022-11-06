<?php

namespace Database\Seeders;

use App\Models\PegawaiPerpustakaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiPerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PegawaiPerpustakaan::create([
            'id_user' => 47,
            'nip' =>'88888888999999999',
            'status' => 'aktif'
        ]);
        PegawaiPerpustakaan::create([
            'id_user' => 48,
            'status' => 'honorer'
        ]);
    }
}
