<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Plan;

class PlanFactory extends Factory
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
            'holding_time' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 week')->format('Y-m-d H:i'),
            'reservation_time' => $this->faker->dateTimeBetween($startDate = '-2 week', $endDate = 'now')->format('Y-m-d H:i'),
            'institution' => $this->faker->city(),
            'court' => $this->faker->randomElement(['Aコート','Bコート','Cコート']),
            'applicants' => $this->faker->numberBetween(10,100),
            'remainder'=> $this->faker->numberBetween(10,100),
            'status' => $this->faker->randomElement([1,2,3]),
            'level'=> $this->faker->randomElement([1,2,3]),
            'category' => $this->faker->randomElement([1,2,3]),
            'price' => $this->faker->randomElement([1000,1500,2000]),
            'Eligibility' => $this->faker->realText(255),
            'payment' => $this->faker->realText(255),
            'Notes' => $this->faker->realText(255),
            'flag' => $this->faker->randomElement([0,1]),
        ];
    }
}
