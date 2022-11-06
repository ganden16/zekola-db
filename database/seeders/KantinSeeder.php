<?php

namespace Database\Seeders;

use App\Models\Kantin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KantinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kantin::create([
            'id_user' => 31,
            'nama_gerai' => 'kantin1'
        ]);
        Kantin::create([
            'id_user' => 32,
            'nama_gerai' => 'kantin2'
        ]);
        Kantin::create([
            'id_user' => 33,
            'nama_gerai' => 'kantin3'
        ]);
        Kantin::create([
            'id_user' => 34,
            'nama_gerai' => 'kantin4'
        ]);
        Kantin::create([
            'id_user' => 35,
            'nama_gerai' => 'kantin5'
        ]);
    }
}
