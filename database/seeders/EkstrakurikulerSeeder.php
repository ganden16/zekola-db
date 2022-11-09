<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ekstrakurikuler::create([
            'nama' => 'Basket',
            'id_pembina_ekstra' => 1,
        ]);
        Ekstrakurikuler::create([
            'nama' => 'Voli',
            'id_pembina_ekstra' => 2,
        ]);
        Ekstrakurikuler::create([
            'nama' => 'Renang',
            'id_pembina_ekstra' => 3,
        ]);
        Ekstrakurikuler::create([
            'nama' => 'Paduan Suara',
            'id_pembina_ekstra' => 4,
        ]);
    }
}
