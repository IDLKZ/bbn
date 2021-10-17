<?php

namespace Database\Factories;

use App\Models\HelpFunds;
use Illuminate\Database\Eloquent\Factories\Factory;

class HelpFundsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HelpFunds::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'login' => $this->faker->word,
        'email' => $this->faker->word,
        'phone' => $this->faker->word,
        'title' => $this->faker->word,
        'text' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
