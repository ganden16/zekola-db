<?php

namespace Database\Seeders;

use App\Models\TU;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TU::create([
            'id_user' => 36,
            'nip' => '55555555566666666',
            'status' => 'aktif'
        ]);
        TU::create([
            'id_user' => 37,
            'nip' => '66666666555555555',
            'status' => 'aktif'
        ]);
        TU::create([
            'id_user' => 38,
            'nip' => '555555555777777777',
            'status' => 'aktif'
        ]);
        TU::create([
            'id_user' => 39,
            'nip' => '66666666777777777',
            'status' => 'aktif'
        ]);
        TU::create([
            'id_user' => 40,
            'nip' => '66666666888888888',
            'status' => 'aktif'
        ]);
    }
}
