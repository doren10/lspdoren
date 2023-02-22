<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\Siswa;
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
        // \App\Models\User::factory(10)->create();
         //Input Data Kategori
         Kategori::create(
            [
                'ket_kategori' => 'Kebersihan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Keamanan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Kesehatan'
            ]
        );
        //Input Data Siswa
        Siswa::create([
            'id' => '1234567890',
            'nama' => 'Irvan Brahmono',
            'kelas' => 'XII',
        ]);
        Siswa::create([
            'id' => '0987654321',
            'nama' => 'Bernad Wijaya',
            'kelas' => 'X',
        ]);
        Siswa::create([
            'id' => '20208918',
            'nama' => 'Doren Airhan',
            'kelas' => 'XII',
        ]);
       
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}