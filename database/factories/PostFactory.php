<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $usersIds = User::where('role_id', '=', 2)->pluck('id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($usersIds),
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph(60, true)
        ];
    }
}
