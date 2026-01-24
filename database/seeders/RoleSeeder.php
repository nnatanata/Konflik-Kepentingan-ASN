<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengguna')->insert([
            [
                'username' => 'pegawai_ex',
                'password' => bcrypt('password123'),
                'role' => 'pegawai',
                'pegawai_nip' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'verifikator_ex',
                'password' => bcrypt('password123'),
                'role' => 'verifikator',
                'pegawai_nip' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'inspektorat_ex',
                'password' => bcrypt('password123'),
                'role' => 'inspektorat',
                'pegawai_nip' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
