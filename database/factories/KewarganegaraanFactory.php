<?php

namespace Database\Factories;

use App\Models\Kewarganegaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

class KewarganegaraanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Kewarganegaraan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->unique()->country,
        ];
    }
}
