<?php

namespace Database\Seeders;

use App\Models\PembinaOsis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembinaOsisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PembinaOsis::create([
            'id_user' => 24,
            'nip' => '000000000333333333'
        ]);
    }
}
