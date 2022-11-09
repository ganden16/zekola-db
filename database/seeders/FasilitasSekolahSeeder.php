<?php

namespace Database\Seeders;

use App\Models\FasilitasSekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasSekolah::create([
            'nama' => 'speaker 1',
            'status' => 'tersedia',
        ]);
        FasilitasSekolah::create([
            'nama' => 'lapangan basket',
            'status' => 'tersedia',
        ]);
        FasilitasSekolah::create([
            'nama' => 'aula',
            'status' => 'dipinjam',
        ]);
    }
}
