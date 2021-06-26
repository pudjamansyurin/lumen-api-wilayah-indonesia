<?php

namespace Database\Factories;

use App\Models\Wilayah;
use Illuminate\Database\Eloquent\Factories\Factory;

class WilayahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Wilayah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'KODE_WILAYAH' => $this->faker->unique()->bothify('######??'),
            'MST_KODE_WILAYAH' => $this->faker->unique()->numerify('######'),
            'NAMA' => $this->faker->unique()->city,
            'LEVEL' => $this->faker->randomElement(['1', '2', '3', '4'])
        ];
    }
}
