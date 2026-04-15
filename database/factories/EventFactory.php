<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
    'event_name' => $this->faker->sentence(3),
    'event_date' => $this->faker->date(),
    'location' => $this->faker->city(),
    'capacity' => $this->faker->numberBetween(50, 500),
];
    }
}