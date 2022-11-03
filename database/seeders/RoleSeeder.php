<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role' => 'root'
        ]);
        Role::create([
            'role' => 'kepala_sekolah'
        ]);
        Role::create([
            'role' => 'guru_mapel'
        ]);
        Role::create([
            'role' => 'siswa'
        ]);
        Role::create([
            'role' => 'wali_murid'
        ]);
        Role::create([
            'role' => 'osis'
        ]);
        Role::create([
            'role' => 'wali_kelas'
        ]);
        Role::create([
            'role' => 'pembina_osis'
        ]);
        Role::create([
            'role' => 'pembina_ekstrakurikuler'
        ]);
        Role::create([
            'role' => 'pegawai_koperasi'
        ]);
        Role::create([
            'role' => 'kantin'
        ]);
        Role::create([
            'role' => 'tu'
        ]);
        Role::create([
            'role' => 'pengawas_sekolah'
        ]);
        Role::create([
            'role' => 'dinas_pendidikan'
        ]);
        Role::create([
            'role' => 'pegawai_perpustakaan'
        ]);
    }
}
