<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'id_user' => 8,
            'id_kelas' => 1,
            'id_ekstra' => 1,
            'nisn' => '1111111111',
            'status' => 'aktif'
        ]);
        Siswa::create([
            'id_user' => 9,
            'id_kelas' => 1,
            'id_ekstra' => 1,
            'nisn' => '1111122222',
            'status' => 'aktif'
        ]);
        Siswa::create([
            'id_user' => 10,
            'id_kelas' => 2,
            'id_ekstra' => 2,
            'nisn' => '1111133333',
            'status' => 'aktif'
        ]);
        Siswa::create([
            'id_user' => 11,
            'id_kelas' => 3,
            'id_ekstra' => 2,
            'nisn' => '1111144444',
            'status' => 'aktif'
        ]);
        Siswa::create([
            'id_user' => 12,
            'id_kelas' => 3,
            'id_ekstra' => 2,
            'nisn' => '1111155555',
            'status' => 'aktif'
        ]);
    }
}
