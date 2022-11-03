<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'root1',
            'email' => 'root1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 1
        ]);
        User::create([
            'nama' => 'root2',
            'email' => 'root2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 1
        ]);
        User::create([
            'nama' => 'kepsek1',
            'email' => 'kepsek1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 2
        ]);
        User::create([
            'nama' => 'gurumapel1',
            'email' => 'gurumapel1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 3
        ]);
        User::create([
            'nama' => 'gurumapel2',
            'email' => 'gurumapel2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 3
        ]);
        User::create([
            'nama' => 'gurumapel3',
            'email' => 'gurumapel3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 3
        ]);
        User::create([
            'nama' => 'gurumapel4',
            'email' => 'gurumapel4@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 3
        ]);
        User::create([
            'nama' => 'siswa1',
            'email' => 'siswa1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 4
        ]);
        User::create([
            'nama' => 'siswa2',
            'email' => 'siswa2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 4
        ]);
        User::create([
            'nama' => 'siswa3',
            'email' => 'siswa3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 4
        ]);
        User::create([
            'nama' => 'siswa4',
            'email' => 'siswa4@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 4
        ]);
        User::create([
            'nama' => 'siswa5',
            'email' => 'siswa5@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 4
        ]);
        User::create([
            'nama' => 'walimurid1',
            'email' => 'walimurid1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 5
        ]);
        User::create([
            'nama' => 'walimurid2',
            'email' => 'walimurid2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 5
        ]);
        User::create([
            'nama' => 'walimurid3',
            'email' => 'walimurid3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 5
        ]);
        User::create([
            'nama' => 'walimurid4',
            'email' => 'walimurid4@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 5
        ]);
        User::create([
            'nama' => 'walimurid5',
            'email' => 'walimurid5@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 5
        ]);
        User::create([
            'nama' => 'osis1',
            'email' => 'osis1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 6
        ]);
        User::create([
            'nama' => 'osis2',
            'email' => 'osis2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 6
        ]);
        User::create([
            'nama' => 'osis3',
            'email' => 'osis3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 6
        ]);
        User::create([
            'nama' => 'walikelas1',
            'email' => 'walikelas1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 7
        ]);
        User::create([
            'nama' => 'walikelas2',
            'email' => 'walikelas2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 7
        ]);
        User::create([
            'nama' => 'walikelas3',
            'email' => 'walikelas3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 7
        ]);
        User::create([
            'nama' => 'pembinaosis1',
            'email' => 'pembinaosis1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 8
        ]);
        User::create([
            'nama' => 'pembinaekstra1',
            'email' => 'pembinaekstra1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 9
        ]);
        User::create([
            'nama' => 'pembinaekstra2',
            'email' => 'pembinaekstra2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 9
        ]);
        User::create([
            'nama' => 'pembinaekstra3',
            'email' => 'pembinaekstra3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 9
        ]);
        User::create([
            'nama' => 'pembinaekstra4',
            'email' => 'pembinaekstra4@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 9
        ]);
        User::create([
            'nama' => 'pegawaikoperasi1',
            'email' => 'pegawaikoperasi1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 10
        ]);
        User::create([
            'nama' => 'pegawaikoperasi2',
            'email' => 'pegawaikoperasi2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 10
        ]);
        User::create([
            'nama' => 'kantin1',
            'email' => 'kantin1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 11
        ]);
        User::create([
            'nama' => 'kantin2',
            'email' => 'kantin2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 11
        ]);
        User::create([
            'nama' => 'kantin3',
            'email' => 'kantin3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 11
        ]);
        User::create([
            'nama' => 'kantin4',
            'email' => 'kantin4@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 11
        ]);
        User::create([
            'nama' => 'kantin5',
            'email' => 'kantin5@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 11
        ]);
        User::create([
            'nama' => 'tu1',
            'email' => 'tu1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 12
        ]);
        User::create([
            'nama' => 'tu2',
            'email' => 'tu2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 12
        ]);
        User::create([
            'nama' => 'tu3',
            'email' => 'tu3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 12
        ]);
        User::create([
            'nama' => 'tu4',
            'email' => 'tu4@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 12
        ]);
        User::create([
            'nama' => 'tu5',
            'email' => 'tu5@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 12
        ]);
        User::create([
            'nama' => 'pengawassekolah1',
            'email' => 'pengawassekolah1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 13
        ]);
        User::create([
            'nama' => 'pengawassekolah2',
            'email' => 'pengawassekolah2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 13
        ]);
        User::create([
            'nama' => 'pengawassekolah3',
            'email' => 'pengawassekolah3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 13
        ]);
        User::create([
            'nama' => 'dinaspendidikan1',
            'email' => 'dinaspendidikan1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 14
        ]);
        User::create([
            'nama' => 'dinaspendidikan2',
            'email' => 'dinaspendidikan2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 14
        ]);
        User::create([
            'nama' => 'dinaspendidikan3',
            'email' => 'dinaspendidikan3@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 14
        ]);
        User::create([
            'nama' => 'pegawaiperpus1',
            'email' => 'pegawaiperpus1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 15
        ]);
        User::create([
            'nama' => 'pegawaiperpus2',
            'email' => 'pegawaiperpus2@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => 15
        ]);
    }
}
