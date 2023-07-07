<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'alamat' => 'Jl. Kebun',
            'no_hp' => "08292923993",
            'pos' => "12221",
            'role' => "Wakil Ketua",
            'user_aktif' => true,
            'password' => bcrypt('123')
        ]);

        \App\Models\User::create([
            'name' => 'Test User 2',
            'email' => 'admin2@gmail.com',
            'alamat' => 'Jl. Kebun',
            'no_hp' => "0829292393",
            'pos' => "Ketua",
            'role' => "admin",
            'user_aktif' => true,
            'password' => bcrypt('123')
        ]);

        \App\Models\Golongan::create([
            'kode' => 'Gol01',
            'nama' => 'Golongan I'
        ]);

        \App\Models\Golongan::create([
            'kode' => 'Gol02',
            'nama' => 'Golongan II'
        ]);

        \App\Models\Golongan::create([
            'kode' => 'Gol03',
            'nama' => 'Golongan III'
        ]);

        \App\Models\Pelanggan::create([
            'golongan_id' => 1,
            'pel_no' => 1,
            'pel_nama' => 'Arif',
            'pel_alamat' => 'Jl. Kebun',
            'pel_hp' => '082282828',
            'pel_ktp' => '123123123',
            'pel_seri' => '123456',
            'pel_meteran' => '123123321',
            'pel_aktif' => 1,
            'user_id' => 1
        ]);
    }
}
