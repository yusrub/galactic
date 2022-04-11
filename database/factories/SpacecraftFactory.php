<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SpacecraftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'class' => Str::random(10),
            'crew' => $this->faker->numberBetween(1, 100000),
            'image' => $this->faker->imageUrl(),
            'value' => $this->faker->numberBetween(1, 100000),
            'status' => $this->faker->randomElement(['active', 'inactive', 'operational']),
            'armament' => $this->faker->randomElement([
                [
                    [
                        "title" => "Laser",
                        "qty" => "10",
                    ],
                    [
                        "title" => "Missile",
                        "qty" => "10",
                    ],
                ],
                [
                    [
                        "title" => "Laser",
                        "qty" => "10",
                    ],
                ],
                [
                    [
                        "title" => "Laser",
                        "qty" => "10",
                    ],
                    [
                        "title" => "Missile",
                        "qty" => "10",
                    ],
                ],
            ]),
        ];
    }
}
