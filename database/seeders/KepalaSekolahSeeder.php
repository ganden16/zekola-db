<?php

namespace Database\Seeders;

use App\Models\KepalaSekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KepalaSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KepalaSekolah::create([
            'id_user' => 3,
            'nip' => '111111111222222222'
        ]);
    }
}
