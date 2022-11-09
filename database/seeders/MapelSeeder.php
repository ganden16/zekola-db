<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::create([
            'nama' => 'Fisika',
            'id_guru_mapel' => 1
        ]);
        Mapel::create([
            'nama' => 'Ekonomi',
            'id_guru_mapel' => 2
        ]);
        Mapel::create([
            'nama' => 'Sosiologi',
            'id_guru_mapel' => 3
        ]);
        Mapel::create([
            'nama' => 'Sejarah Sastra',
            'id_guru_mapel' => 4
        ]);
    }
}
