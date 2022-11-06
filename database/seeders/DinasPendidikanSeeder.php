<?php

namespace Database\Seeders;

use App\Models\DinasPendidikan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DinasPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DinasPendidikan::create([
            'id_user' => 44,
            'nip' => '000000000999999999'
        ]);
        DinasPendidikan::create([
            'id_user' => 45,
            'nip' => '000000000111111111'
        ]);
        DinasPendidikan::create([
            'id_user' => 46,
            'nip' => '000000000222222222'
        ]);
    }
}
