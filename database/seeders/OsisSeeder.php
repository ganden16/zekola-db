<?php

namespace Database\Seeders;

use App\Models\Osis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OsisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Osis::create([
            'id_user' => 18,
        ]);
        Osis::create([
            'id_user' => 19,
        ]);
        Osis::create([
            'id_user' => 20,
        ]);
    }
}
