<?php

namespace Database\Factories;

use App\Models\Ruangan;
use Illuminate\Database\Eloquent\Factories\Factory;

class RuanganFactory extends Factory
{
    // Nama model yang digunakan oleh factory
    protected $model = Ruangan::class;

    /**
     * Definisikan model yang akan dibuat.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_ruangan' => fake()->unique()->bothify('###'),
            'nama_ruangan' => fake()->randomElement(['IOT','Ruangan Teori','LAB Pemograman','LAB Jaringan']),
            'gedung' => fake()->randomElement(['F', 'G', 'C', 'A', 'B', 'AB']),
            'lantai' => fake()->numberBetween(1, 5),
            'jenis_ruangan' => fake()->randomElement([ 'Pratikum', 'Teori']),
            'kapasitas' => fake()->numberBetween(25, 28),
            'keterangan' => fake()->randomElement(['Ruangan Dosen','Pustaka','Ruangan Untuk Teori','Ruangan untuk Pratikum']),
        ];
    }
}
