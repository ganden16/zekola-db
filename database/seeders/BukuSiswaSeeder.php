<?php

namespace Database\Seeders;

use App\Models\BukuSiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BukuSiswa::create([
            'nama' => 'Fisika',
            'kelas' => 'X IPA',
            'kuantitas' => 210,
            'harga' => 30000,
        ]);
        BukuSiswa::create([
            'nama' => 'Ekonomi',
            'kelas' => 'XI IPS',
            'kuantitas' => 95,
            'harga' => 35000,
        ]);
        BukuSiswa::create([
            'nama' => 'Sejarah Sastra',
            'kelas' => 'X BAHASA',
            'kuantitas' => 40,
            'harga' => 40000,
        ]);
    }
}
