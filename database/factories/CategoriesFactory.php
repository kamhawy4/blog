<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Faker\Generator as Faker;

class CategoriesFactory extends Factory
{

    protected $model = Categories::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
