<?php

namespace Database\Seeders;

use App\Models\PegawaiKoperasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiKoperasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PegawaiKoperasi::create([
            'id_user' => 29,
            'nip' =>'777777777999999999',
            'status' => 'aktif'
        ]);
        PegawaiKoperasi::create([
            'id_user' => 30,
            'status' => 'honorer'
        ]);
    }
}
