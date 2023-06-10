<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comments;

class CommentsFactory extends Factory
{
    protected $model = Comments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->name(),
            'post_id' => 2,
        ];
    }
}
