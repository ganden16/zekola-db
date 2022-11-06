<?php

namespace Database\Seeders;

use App\Models\PengawasSekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengawasSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengawasSekolah::create([
            'id_user' => 41,
            'nip' => '777777777888888888'
        ]);
        PengawasSekolah::create([
            'id_user' => 42,
            'nip' => '888888888777777777'
        ]);
    }
}
