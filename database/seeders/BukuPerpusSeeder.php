<?php

namespace Database\Seeders;

use App\Models\BukuPerpus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuPerpusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BukuPerpus::create([
            'judul' => 'buku1',
            'kategori' => 'umum',
            'status' => 'tersedia',
        ]);
        BukuPerpus::create([
            'judul' => 'buku2',
            'kategori' => 'filsafat',
            'status' => 'tersedia',
        ]);
        BukuPerpus::create([
            'judul' => 'buku3',
            'kategori' => 'teknologi',
            'status' => 'dipinjam',
        ]);
        BukuPerpus::create([
            'judul' => 'buku4',
            'kategori' => 'sejarah',
            'status' => 'hilang',
        ]);
    }
}
