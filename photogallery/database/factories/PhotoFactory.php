<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Album;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     // la factory permette di creare la relazione tra il campo e la tabella Album
    public function definition(): array
    {
        return [
            'name' => $this->faker->text(60),
            'description' => $this->faker->text(128),
            'image_path' => $this->faker->imageUrl(),
            'created_at' => $this->faker->dateTime(),
            'album_id' => Album::factory()
        ];
    }
}
