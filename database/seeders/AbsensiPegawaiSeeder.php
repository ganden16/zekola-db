<?php

namespace Database\Seeders;

use App\Models\AbsensiPegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AbsensiPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AbsensiPegawai::create([
            'id_user' => 4,
            'tanggal' => Carbon::today()->toDateString(),
            'status' => 'hadir',
        ]);
        AbsensiPegawai::create([
            'id_user' => 5,
            'tanggal' => Carbon::today()->toDateString(),
            'status' => 'hadir',
        ]);
        AbsensiPegawai::create([
            'id_user' => 6,
            'tanggal' => Carbon::today()->toDateString(),
            'status' => 'hadir',
        ]);
    }
}
