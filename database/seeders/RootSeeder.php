<?php

namespace Database\Seeders;

use App\Models\Root;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RootSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Root::create([
            'id_user' => 1,
            'nip' => '123456789123456789'
        ]);
        Root::create([
            'id_user' => 2,
            'nip' => '987654321987654321'
        ]);
    }
}
