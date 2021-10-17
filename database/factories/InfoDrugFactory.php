<?php

namespace Database\Factories;

use App\Models\InfoDrug;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfoDrugFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InfoDrug::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'email' => $this->faker->word,
        'phone' => $this->faker->word,
        'city' => $this->faker->word,
        'address' => $this->faker->word,
        'text' => $this->faker->text,
        'image' => $this->faker->word,
        'status' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
