<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Bidang;
use App\Models\Institusi;
use App\Models\Profil;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Bidang::create([
            'nama_bidang' => 'Sekretariat',
            'slug' => 'sekretariat'
        ]);
        Bidang::create([
            'nama_bidang' => 'Bidang Kesehatan Masyarakat',
            'slug' => 'bidang-kesehatan-masyarakat'
        ]);

        User::create([
            'username' => 'Bagas',
            'nama' => 'Bagas Roberto',
            'email' => 'roberto.bagas7@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Profil::create([
            'halaman_profil' => 'Visi Misi'
        ]);

        User::factory(3)->create();



    }
}
