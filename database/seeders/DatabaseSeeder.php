<?php

namespace Database\Seeders;
use App\Models\Dosen;
use App\Models\Prodi;
use App\Models\Ruangan;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // menambahkan data random di user
        /// User::factory(10)->create();

         // menambahkan data random di mahasiswa
        /// Mahasiswa::factory(50)->create();

        // menambahkan data random untuk dosen
        /// Dosen::factory(50)->create();

        //  \App\Models\Prodi::create([
        //     'nama'=>'D3 Teknik Komputer',
        // ]);

        //  \App\Models\Prodi::create([
        //     'nama'=>'D3 Manajemen Informatika',
        // ]);

        //  \App\Models\Prodi::create([
        //     'nama'=>'D4 TRPL',
        // ]);

        //  App\Models\Prodi::create([
        //     'nama'=>'D4 ANIMASI'
        // ]);

       //  Prodi::factory(10)->create();
           Ruangan::factory(10)->create();
        //  User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
