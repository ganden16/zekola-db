<?php

namespace Database\Seeders;

use App\Models\PembinaEkstrakurikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembinaEkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PembinaEkstrakurikuler::create([
            'id_user' => 25,
            'id_ekstra' => 1,
            'nip' => '33333333444444444',
            'status' => 'aktif'
        ]);
        PembinaEkstrakurikuler::create([
            'id_user' => 26,
            'id_ekstra' => 2,
            'nip' => '44444444433333333',
            'status' => 'aktif'
        ]);
        PembinaEkstrakurikuler::create([
            'id_user' => 27,
            'id_ekstra' => 3,
            'nip' => '2222222222444444444',
            'status' => 'aktif'
        ]);
        PembinaEkstrakurikuler::create([
            'id_user' => 28,
            'id_ekstra' => 4,
            'nip' => '444444444222222222',
            'status' => 'aktif'
        ]);
    }
}
