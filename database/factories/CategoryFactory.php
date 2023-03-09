<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        //Faker name will be generated outside of the return so the slug can take it's name too.
        $name = $this->faker->unique()->word(20);
        return[
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}

