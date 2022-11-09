<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::create([
            'nama' =>  'X IPA 1',
            'id_wali_kelas' => 1,
        ]);
        Kelas::create([
            'nama' =>  'XI IPS 1',
            'id_wali_kelas' => 2,
        ]);
        Kelas::create([
            'nama' =>  'X BAHASA',
            'id_wali_kelas' => 3,
        ]);
    }
}
