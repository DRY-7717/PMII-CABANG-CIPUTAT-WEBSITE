<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'telp' => $this->faker->randomNumber(9, true),
            'slug' => $this->faker->slug(3),
            'excerpt' => $this->faker->paragraph(mt_rand(3,5)),
            'body' => collect($this->faker->paragraphs(mt_rand(15, 20)))->map(fn ($p) => "<p>$p</>")->implode(''),
            'produsen' => $this->faker->name(),
            'instagram' => $this->faker->name(),
            'facebook' => $this->faker->name(),
            'categoryproduct_id' => mt_rand(1, 2),
            'user_id' => mt_rand(1, 11),
        ];
    }
}
