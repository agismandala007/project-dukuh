<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'tanggal_kegiatan' => fake()->date('Y-m-d'),
            'lokasi' => fake()->randomElement(['Kampus 1 UAD', 'Kampus 2 UAD', 'Kampus 3 UAD', 'Kampus 4 UAD', 'Kampus 5 UAD']),
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, consequuntur labore praesentium sunt nostrum alias at impedit iusto incidunt molestias modi pariatur iste ex dignissimos, dolorem vero minima dolore reprehenderit?',
        ];
    }
}
