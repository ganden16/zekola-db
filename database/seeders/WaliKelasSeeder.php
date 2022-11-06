<?php

namespace Database\Seeders;

use App\Models\WaliKelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WaliKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WaliKelas::create([
            'id_user' => 21,
            'id_kelas' => 1,
            'nip' => '444444444555555555'
        ]);
        WaliKelas::create([
            'id_user' => 22,
            'id_kelas' => 2,
            'nip' => '555555555444444444'
        ]);
        WaliKelas::create([
            'id_user' => 23,
            'id_kelas' => 3,
            'nip' => '333333333555555555'
        ]);
    }
}
