<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demografis>
 */
class DemografisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rt' => fake()->randomElement([21, 22, 23, 24]),
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->date('Y-m-d'),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'agama' => fake()->randomElement(['Islam', 'Kristen']),
            'status' => fake()->randomElement(['Kawin', 'Belum Kawin']),
            'tingkat_pendidikan' => fake()->randomElement(['SD/Sederajat', 'SMP/Sederajat', 'SMA/Sederajat', 'Mahasiswa']),
            'mata_pencarian' => fake()->randomElement(['Pelajar/Mahasiswa', 'PNS', 'Berwirausaha'])
        ];
    }
}
