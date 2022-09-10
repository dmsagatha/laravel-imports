<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
  public function definition()
  {
    return [
      'namecat'     => $this->faker->word(15),
      'description' => $this->faker->sentence($nbWords = 2)
    ];
  }
}