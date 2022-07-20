<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SecretaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(mt_rand(2, 6)),
            'slug' => $this->faker->slug(3),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(15, 20)))->map(fn ($p) => "<p>$p</>")->implode(''),
            'file' => $this->faker->sentence(mt_rand(1, 2)),
            'description' => 'Diterima',
            'user_id' => mt_rand(1, 11),
        ];
    }
}
