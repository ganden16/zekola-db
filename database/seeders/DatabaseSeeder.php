<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            RootSeeder::class,
            KepalaSekolahSeeder::class,
            GuruMapelSeeder::class,
            PembinaEkstrakurikulerSeeder::class,
            WaliKelasSeeder::class,
            TUSeeder::class,
            SiswaSeeder::class,
            WaliMuridSeeder::class,
            PengawasSekolahSeeder::class,
            PegawaiPerpustakaanSeeder::class,
            PegawaiKoperasiSeeder::class,
            KantinSeeder::class,
            OsisSeeder::class,
            DinasPendidikanSeeder::class,
            PembinaOsisSeeder::class,
            KelasSeeder::class,
            MapelSeeder::class,
            EkstrakurikulerSeeder::class,
            BukuSiswaSeeder::class,
            BukuPerpusSeeder::class,
            BarangKoperasiSeeder::class,
            FasilitasSekolahSeeder::class,
            AbsensiPegawaiSeeder::class,

        ]);
    }
}
