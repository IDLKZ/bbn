<?php

namespace Database\Factories;

use App\Models\Points;
use Illuminate\Database\Eloquent\Factories\Factory;

class PointsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Points::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->word,
        'bookmarks' => $this->faker->word,
        'graffiti' => $this->faker->word,
        'smoking_products' => $this->faker->word,
        'address' => $this->faker->word,
        'video' => $this->faker->word,
        'status' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
