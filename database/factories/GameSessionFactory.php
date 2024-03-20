<?php

namespace Database\Factories;

use App\Models\GameSession;
use App\Models\MemoTest;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameSessionFactory extends Factory
{
    protected $model = GameSession::class;
    public function definition()
    {
        return [
            'memo_test_id' => MemoTest::inRandomOrder()->first()->id,
            'user_session_code' => $this->faker->uuid(),
            'retries' => 0,
            'number_of_pairs' => 0,
            'state' => $this->faker->randomElement(['Started', 'Completed']),
        ];
    }

}
