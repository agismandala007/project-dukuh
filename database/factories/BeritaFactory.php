<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => fake()->title,
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, consequuntur labore praesentium sunt nostrum alias at impedit iusto incidunt molestias modi pariatur iste ex dignissimos, dolorem vero minima dolore reprehenderit?',
            'gambar' => 'post-images-berita/M2pkHg99lKPwzwlOrfKlwEwXJ7fjJLhMJOcoYcOG.png'
        ];
    }
}
