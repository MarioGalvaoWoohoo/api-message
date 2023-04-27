<?php

namespace Database\Factories;

use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    protected $model = Message::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'message' => $this->faker->paragraph(),
            'priority' => 0,
            'type' => $this->faker->numberBetween(1, 4),
            'status' => 1,
            'start_date' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'end_date' => $this->faker->dateTimeBetween('+1 week', '+2 weeks'),
            'user_id' => 1,
        ];
    }
}
