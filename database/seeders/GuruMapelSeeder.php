<?php

namespace Database\Seeders;

use App\Models\GuruMapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruMapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuruMapel::create([
            'id_user' => 4,
            'id_mapel' => 1,
            'nip' => '22222222211111111',
            'status' => 'aktif'
        ]);
        GuruMapel::create([
            'id_user' => 5,
            'id_mapel' => 2,
            'nip' => '333333333222222222',
            'status' => 'aktif'
        ]);
        GuruMapel::create([
            'id_user' => 6,
            'id_mapel' => 3,
            'nip' => '22222222233333333',
            'status' => 'aktif'
        ]);
        GuruMapel::create([
            'id_user' => 7,
            'id_mapel' => 4,
            'nip' => '111111111333333333',
            'status' => 'aktif'
        ]);
    }
}
