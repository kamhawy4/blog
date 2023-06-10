<?php

namespace Database\Factories;
use App\Models\Posts;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{

    protected $model = Posts::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'   => $this->faker->name(),
            'content' => $this->faker->paragraph(),
            'user_id' => 10,
        ];
    }
}
