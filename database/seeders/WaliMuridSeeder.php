<?php

namespace Database\Seeders;

use App\Models\WaliMurid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WaliMuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WaliMurid::create([
            'id_user' => 13,
            'id_siswa' => 1,
            'status' => 'ayah kandung'
        ]);
        WaliMurid::create([
            'id_user' => 14,
            'id_siswa' => 2,
            'status' => 'ibu kandung'
        ]);
        WaliMurid::create([
            'id_user' => 15,
            'id_siswa' => 3,
            'status' => 'paman'
        ]);
        WaliMurid::create([
            'id_user' => 16,
            'id_siswa' => 4,
            'status' => 'pengasuh yayasan'
        ]);
        WaliMurid::create([
            'id_user' => 17,
            'id_siswa' => 5,
            'status' => 'kakak kandung'
        ]);
    }
}
